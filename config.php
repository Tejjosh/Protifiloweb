<?php
/**
 * config.php
 * ------------------------------------------------------------------
 * Keep secrets out of chat.php itself.
 * Preferred: set an environment variable ANTHROPIC_API_KEY on your
 * server (cPanel, Hostinger, etc. all support this).
 * Fallback: paste your key on the line below for quick local testing
 * only — do NOT commit a real key if this repo is public.
 * ------------------------------------------------------------------
 */

$envKey = getenv('ANTHROPIC_API_KEY');

define('ANTHROPIC_API_KEY', $envKey !== false ? $envKey : 'PASTE_YOUR_KEY_HERE');
