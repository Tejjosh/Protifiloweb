<?php
/**
 * chat.php
 * ------------------------------------------------------------------
 * Handles the "Ask AI about Tej" widget on the portfolio.
 * Calls the Google Gemini API (gemini-1.5-flash) with a system prompt
 * built dynamically from data.php.
 * ------------------------------------------------------------------
 */

header('Content-Type: application/json');
session_start();

require_once __DIR__ . '/data.php';

// Safely require config.php if it exists
if (file_exists(__DIR__ . '/config.php')) {
    require_once __DIR__ . '/config.php'; 
}

// ---- Read the incoming request -------------------------------------------
$raw = file_get_contents('php://input');
$body = json_decode($raw, true);

$userMessage = isset($body['message']) ? trim($body['message']) : '';
if ($userMessage === '') {
  http_response_code(400);
  echo json_encode(['error' => 'Empty message.']);
  exit;
}

// Cap length and keep only last 8 turns of history
$userMessage = mb_substr($userMessage, 0, 800);
$history = isset($body['history']) && is_array($body['history']) ? $body['history'] : [];
$history = array_slice($history, -8); 

// ---- Build a system prompt dynamically from the resume data --------------
function buildResumeContext($personal_info, $experiences, $education, $projects, $skills, $certifications) {
  $lines = [];
  $lines[] = "Name: {$personal_info['name']}";
  $lines[] = "Location: {$personal_info['location']}";
  $lines[] = "Contact: {$personal_info['email']} | {$personal_info['phone']}";
  // FIXED: Changed 'objective' to 'summary' to match updated data.php
  $lines[] = "Summary: {$personal_info['summary']}";

  $lines[] = "\nWORK EXPERIENCE:";
  foreach ($experiences as $e) {
    $lines[] = "- {$e['position']} at {$e['company']} ({$e['location']}), {$e['duration']}: {$e['description']}";
  }

  $lines[] = "\nEDUCATION:";
  foreach ($education as $ed) {
    $lines[] = "- {$ed['degree']}, {$ed['institution']} ({$ed['duration']}) {$ed['description']}";
  }

  $lines[] = "\nPROJECTS:";
  foreach ($projects as $p) {
    $lines[] = "- {$p['title']} ({$p['duration']}): {$p['description']}" . (!empty($p['link']) ? " Link: {$p['link']}" : "");
  }

  $lines[] = "\nSKILLS:";
  foreach ($skills as $cat => $items) {
    $lines[] = "- {$cat}: " . implode(', ', $items);
  }

  $lines[] = "\nCERTIFICATIONS:";
  foreach ($certifications as $c) {
    $lines[] = "- {$c['title']}" . (!empty($c['issuer']) ? " ({$c['issuer']})" : "") . (!empty($c['date']) ? ", {$c['date']}" : "");
  }

  return implode("\n", $lines);
}

$resumeContext = buildResumeContext($personal_info, $experiences, $education, $projects, $skills, $certifications);

$systemPrompt = <<<PROMPT
You are the friendly AI assistant embedded on Tej Joshi's personal portfolio website.
Answer visitor questions ONLY using the resume information below. Speak about Tej in
the third person, keep answers short (2-4 sentences unless asked for detail), and stay
warm and professional, like a helpful assistant at a career fair booth.

If asked something not covered by this information (e.g. his opinions, availability,
or unrelated topics), say you don't have that detail and suggest contacting Tej
directly at {$personal_info['email']}.

--- TEJ'S RESUME DATA ---
{$resumeContext}
--- END RESUME DATA ---
PROMPT;

// ---- Assemble the message list for the Gemini API -------------------------
// Gemini uses 'user' and 'model' as roles (unlike OpenAI/Anthropic which use 'assistant')
$contents = [];
foreach ($history as $turn) {
  if (!isset($turn['role'], $turn['content'])) continue;
  $role = $turn['role'] === 'assistant' ? 'model' : 'user';
  $contents[] = [
      'role' => $role,
      'parts' => [['text' => mb_substr((string)$turn['content'], 0, 800)]]
  ];
}
// Add the current user message
$contents[] = [
    'role' => 'user',
    'parts' => [['text' => $userMessage]]
];

// ---- No API key configured yet? Fall back to simple keyword bot --------
if (!defined('GEMINI_API_KEY') || GEMINI_API_KEY === '' || GEMINI_API_KEY === 'PASTE_YOUR_KEY_HERE') {
  echo json_encode(['reply' => fallbackReply($userMessage, $personal_info, $experiences, $projects, $skills), 'mode' => 'fallback']);
  exit;
}

// ---- Call the Google Gemini API --------------------------------------------
$payload = [
    'system_instruction' => [
        'parts' => [
            ['text' => $systemPrompt]
        ]
    ],
    'contents' => $contents,
    'generationConfig' => [
        'maxOutputTokens' => 400,
        'temperature' => 0.7
    ]
];

// Using the fast and free gemini-1.5-flash model
$url = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=' . GEMINI_API_KEY;

$ch = curl_init($url);
curl_setopt_array($ch, [
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_POST => true,
  CURLOPT_HTTPHEADER => [
    'Content-Type: application/json',
  ],
  CURLOPT_POSTFIELDS => json_encode($payload),
  CURLOPT_TIMEOUT => 25,
]);

$response = curl_exec($ch);
$curlErr = curl_error($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($curlErr || $httpCode >= 400 || !$response) {
  // API failed (bad key, no network, etc.) — degrade gracefully
  echo json_encode([
    'reply' => fallbackReply($userMessage, $personal_info, $experiences, $projects, $skills),
    'mode' => 'fallback',
    'debug' => $curlErr ?: "HTTP $httpCode (Response: $response)"
  ]);
  exit;
}

$data = json_decode($response, true);
$text = '';

// Extract text from Gemini's response structure
if (isset($data['candidates'][0]['content']['parts'][0]['text'])) {
    $text = $data['candidates'][0]['content']['parts'][0]['text'];
}

if ($text === '') {
  $text = fallbackReply($userMessage, $personal_info, $experiences, $projects, $skills);
}

echo json_encode(['reply' => trim($text), 'mode' => 'llm']);
exit;

// ---- Simple offline fallback so the widget still feels "alive" -----------
function fallbackReply($msg, $personal_info, $experiences, $projects, $skills) {
  $m = mb_strtolower($msg);

  if (str_contains($m, 'contact') || str_contains($m, 'email') || str_contains($m, 'reach')) {
    return "You can reach Tej at {$personal_info['email']} or {$personal_info['phone']}.";
  }
  if (str_contains($m, 'project')) {
    $names = array_slice(array_column($projects, 'title'), 0, 4);
    return "Some of Tej's projects include " . implode(', ', $names) . ". Scroll to the Projects section for details.";
  }
  if (str_contains($m, 'skill') || str_contains($m, 'stack') || str_contains($m, 'tech')) {
    $prog = implode(', ', $skills['Programming'] ?? []);
    return "Tej's core programming skills include {$prog}, plus databases, IoT, and data engineering.";
  }
  if (str_contains($m, 'experience') || str_contains($m, 'work') || str_contains($m, 'intern')) {
    $latest = $experiences[0];
    return "Most recently, Tej worked as a {$latest['position']} at {$latest['company']} ({$latest['duration']}).";
  }
  if (str_contains($m, 'hi') || str_contains($m, 'hello') || str_contains($m, 'hey')) {
    return "Hey! I'm a small AI assistant for {$personal_info['name']}'s portfolio. Ask me about his projects, skills, or experience.";
  }

  return "I'm running in offline mode right now (no AI API key configured yet), but I can tell you about Tej's projects, skills, experience, or how to contact him — what would you like to know?";
}
?>