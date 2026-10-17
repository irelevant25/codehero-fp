<?php
/* ═══════════════════════════════════════════════════════════
   bootstrap — Shared setup and helpers for every page
   The entry files (index.php, contact.php and the same under en/)
   set $lang and include a page template, which requires this first.
   ═══════════════════════════════════════════════════════════ */

require_once __DIR__ . '/data.php';
require_once __DIR__ . '/i18n.php';

// Opened directly (/includes/…) or with an unknown language → 404
if (!isset($lang) || !array_key_exists($lang, T)) {
    http_response_code(404);
    exit;
}

define('LANG', $lang);

// ── Helpers ───────────────────────────────────────────────────────────────────

// Escape a value for HTML
function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

// Translated UI string, escaped; a missing key shows up as the key itself
function t(string $key): string
{
    $strings = T[LANG];
    return e($strings[$key] ?? $key);
}

// Text in the current language from a plain string or ['sk' => …, 'en' => …]
function loc($text): string
{
    return is_array($text) ? $text[LANG] : $text;
}

function other_lang(): string
{
    return LANG === 'sk' ? 'en' : 'sk';
}

// Path of a page: home → / or /en/, contact → /contact.php or /en/contact.php
function page_url(string $page, string $lang = LANG): string
{
    $prefix = $lang === 'sk' ? '/' : '/' . $lang . '/';
    return $page === 'home' ? $prefix : $prefix . $page . '.php';
}

require_once __DIR__ . '/partials.php';
