<?php
/**
 * contact.php
 * ------------------------------------------------------------------
 * Handles the "Direct Contact" form on the portfolio.
 * Receives JSON { name, email, message }, validates it, and sends an
 * email to Tej using PHP's mail(). Falls back to logging the message
 * to contact-log.json if mail() isn't available (many local/dev
 * servers don't have a mail server configured).
 *
 * SETUP NOTE:
 * PHP's built-in mail() only works if your host has a mail server
 * (MTA) configured — most shared hosting (cPanel, Hostinger, etc.)
 * has this out of the box. If messages aren't arriving, check your
 * host's docs, or swap the send() function below for an SMTP
 * library like PHPMailer.
 * ------------------------------------------------------------------
 */

header('Content-Type: application/json');
require_once __DIR__ . '/data.php';

$raw = file_get_contents('php://input');
$body = json_decode($raw, true);

$name    = isset($body['name'])    ? trim(strip_tags($body['name']))    : '';
$email   = isset($body['email'])   ? trim($body['email'])               : '';
$message = isset($body['message']) ? trim(strip_tags($body['message'])) : '';

// ---- Validation ----
$errors = [];
if ($name === '' || mb_strlen($name) > 100) $errors[] = 'Please enter a valid name.';
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Please enter a valid email address.';
if ($message === '' || mb_strlen($message) < 5) $errors[] = 'Please write a short message.';
if (mb_strlen($message) > 3000) $errors[] = 'Message is too long.';

if (!empty($errors)) {
  http_response_code(422);
  echo json_encode(['success' => false, 'errors' => $errors]);
  exit;
}

// ---- Basic rate limiting (session-based, 1 message per 30s) ----
session_start();
$now = time();
if (!empty($_SESSION['last_contact_at']) && ($now - $_SESSION['last_contact_at']) < 30) {
  http_response_code(429);
  echo json_encode(['success' => false, 'errors' => ['Please wait a few seconds before sending another message.']]);
  exit;
}
$_SESSION['last_contact_at'] = $now;

// ---- Try to send the email ----
$to = $personal_info['email'];
$subject = "Portfolio contact form: message from {$name}";
$body_text = "Name: {$name}\nEmail: {$email}\n\nMessage:\n{$message}\n";
$headers = "From: no-reply@" . ($_SERVER['HTTP_HOST'] ?? 'localhost') . "\r\n";
$headers .= "Reply-To: {$email}\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$sent = false;
if (function_exists('mail')) {
  $sent = @mail($to, $subject, $body_text, $headers);
}

// ---- Fallback: log to a local JSON file so nothing is lost ----
if (!$sent) {
  $logFile = __DIR__ . '/contact-log.json';
  $entries = [];
  if (file_exists($logFile)) {
    $existing = json_decode(file_get_contents($logFile), true);
    if (is_array($existing)) $entries = $existing;
  }
  $entries[] = [
    'name' => $name,
    'email' => $email,
    'message' => $message,
    'time' => date('c'),
  ];
  @file_put_contents($logFile, json_encode($entries, JSON_PRETTY_PRINT));
}

echo json_encode(['success' => true, 'mode' => $sent ? 'mailed' : 'logged']);
