<?php
/* ═══════════════════════════════════════════════════════════
   partials — Markup shared by the page templates
   $page is a page name as page_url() takes it: 'home', 'contact'
   ═══════════════════════════════════════════════════════════ */

// ── <head> ────────────────────────────────────────────────────────────────────

// Icons, fonts, and the saved theme / language applied before the first paint
function head_common(string $page): void
{ ?>
    <link rel="icon" href="/favicon.ico" sizes="32x32" />
    <link rel="icon" href="/favicon.svg" type="image/svg+xml" />
    <link rel="apple-touch-icon" href="/apple-touch-icon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@500;700&display=swap"
        rel="stylesheet" />
    <script>
        // Before the first paint: apply the saved theme, and send a visitor
        // who switched to the other language before to that version
        (function () {
            try {
                const t = localStorage.getItem('theme') || 'auto';
                document.documentElement.setAttribute('data-theme', t === 'auto'
                    ? (matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light')
                    : t);
                if (localStorage.getItem('lang') === '<?= other_lang() ?>') {
                    location.replace('<?= page_url($page, other_lang()) ?>' + location.hash);
                }
            } catch (e) { }
        })();
    </script>
<?php }

// Canonical URL, language alternates, social preview and structured data
function seo_head(string $page): void
{
    $url = SITE_URL . page_url($page); ?>
    <link rel="canonical" href="<?= e($url) ?>" />
<?php foreach (array_keys(T) as $code): ?>
    <link rel="alternate" hreflang="<?= $code ?>" href="<?= e(SITE_URL . page_url($page, $code)) ?>" />
<?php endforeach; ?>
    <link rel="alternate" hreflang="x-default" href="<?= e(SITE_URL . page_url($page, 'sk')) ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?= e(COMPANY['name']) ?>" />
    <meta property="og:title" content="<?= t('meta_title') ?>" />
    <meta property="og:description" content="<?= t('meta_desc') ?>" />
    <meta property="og:url" content="<?= e($url) ?>" />
    <meta property="og:locale" content="<?= t('og_locale') ?>" />
    <meta property="og:locale:alternate" content="<?= e(T[other_lang()]['og_locale']) ?>" />
    <meta property="og:image" content="<?= SITE_URL ?>/assets/og-image.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="<?= e(COMPANY['name']) ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <script type="application/ld+json"><?= structured_data() ?></script>
<?php }

// schema.org description of the company for search engines
function structured_data(): string
{
    $org = SITE_URL . '/#organization';

    // Each technology of the skill list: 'Angular / TypeScript' → 'Angular', 'TypeScript'
    $topics = [];
    foreach (SKILLS as $skill) {
        $topics = array_merge($topics, explode(' / ', $skill['name']));
    }

    return json_encode([
        '@context' => 'https://schema.org',
        '@graph'   => [
            [
                '@type'        => 'Organization',
                '@id'          => $org,
                'name'         => COMPANY['name'],
                'legalName'    => COMPANY['name'],
                'url'          => SITE_URL . '/',
                'logo'         => SITE_URL . '/apple-touch-icon.png',
                'description'  => T[LANG]['meta_desc'],
                'email'        => EMAIL,
                'foundingDate' => COMPANY['founded'],
                'address'      => [
                    '@type'           => 'PostalAddress',
                    'streetAddress'   => COMPANY['street'],
                    'postalCode'      => COMPANY['zip'],
                    'addressLocality' => COMPANY['city'],
                    'addressCountry'  => 'SK',
                ],
                'identifier'   => ['@type' => 'PropertyValue', 'propertyID' => 'IČO', 'value' => COMPANY['ico']],
                'taxID'        => COMPANY['dic'],
                'vatID'        => COMPANY['ic_dph'],
                'sameAs'       => [GITHUB_URL],
                'knowsAbout'   => $topics,
            ],
            [
                '@type'      => 'WebSite',
                '@id'        => SITE_URL . '/#website',
                'url'        => SITE_URL . '/',
                'name'       => COMPANY['name'],
                'inLanguage' => array_keys(T),
                'publisher'  => ['@id' => $org],
            ],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG);
}

// ── Pieces of the page ────────────────────────────────────────────────────────

// The same page in the other language; js remembers the choice on click
function lang_switch(string $page): void
{
    $other = other_lang(); ?>
            <a class="icon-btn lang-btn" id="langBtn" href="<?= page_url($page, $other) ?>"
                hreflang="<?= $other ?>" lang="<?= $other ?>" data-lang="<?= $other ?>"
                title="<?= t('lang_switch') ?>"><?= strtoupper($other) ?></a>
<?php }

// GitHub mark (Primer Octicons, MIT)
function github_icon(): string
{
    return '<svg class="gh-icon" viewBox="0 0 16 16" aria-hidden="true"><path d="M8 0c4.42 0 8 3.58 8 8a8.013 8.013 0 0 1-5.45 7.59c-.4.08-.55-.17-.55-.38 0-.27.01-1.13.01-2.2 0-.75-.25-1.23-.54-1.48 1.78-.2 3.65-.88 3.65-3.95 0-.88-.31-1.59-.82-2.15.08-.2.36-1.02-.08-2.12 0 0-.67-.22-2.2.82-.64-.18-1.32-.27-2-.27-.68 0-1.36.09-2 .27-1.53-1.03-2.2-.82-2.2-.82-.44 1.1-.16 1.92-.08 2.12-.51.56-.82 1.28-.82 2.15 0 3.06 1.86 3.75 3.64 3.95-.23.2-.44.55-.51 1.07-.46.21-1.61.55-2.33-.66-.15-.24-.6-.83-1.23-.82-.67.01-.27.38.01.53.34.19.73.9.82 1.13.16.45.68 1.31 2.69.94 0 .67.01 1.3.01 1.49 0 .21-.15.45-.55.38A7.995 7.995 0 0 1 0 8c0-4.42 3.58-8 8-8Z"/></svg>';
}

// Stroked icons of the card placeholders, in the style of the site's other icons
function placeholder_icon(string $name): string
{
    $shapes = [
        'lock'  => '<rect x="4" y="11" width="16" height="10" rx="2" /><path d="M8 11V7a4 4 0 0 1 8 0v4" />',
        'globe' => '<circle cx="12" cy="12" r="10" /><path d="M2 12h20M12 2a15 15 0 0 1 0 20M12 2a15 15 0 0 0 0 20" />',
    ];
    return '<svg viewBox="0 0 24 24">' . $shapes[$name] . '</svg>';
}

// Screenshot at the top of a card, or an icon when there is none (a lock for internal systems).
// It links where the card's first link goes: a bigger target for the mouse, skipped by keyboards
// and screen readers, which have that link already.
function ref_thumb(array $project): void
{
    $name = loc($project['name']);
    $href = $project['url'] ?? (isset($project['repo']) ? GITHUB_URL . '/' . $project['repo'] : '');
    $tag  = $href ? 'a' : 'div';
    $link = $href ? ' href="' . e($href) . '" target="_blank" rel="noopener" tabindex="-1"' : '';

    if (!empty($project['image'])): ?>
                    <<?= $tag ?> class="ref-thumb"<?= $link ?> aria-hidden="true">
                        <img src="/assets/refs/<?= e($project['image']) ?>" width="800" height="450"
                            alt="<?= t('thumb_alt') ?>: <?= e($name) ?>" loading="lazy" decoding="async" />
                    </<?= $tag ?>>
<?php elseif (!empty($project['internal'])): ?>
                    <<?= $tag ?> class="ref-thumb ph"<?= $link ?> aria-hidden="true"><?= placeholder_icon('lock') ?><span><?= t('thumb_internal') ?></span></<?= $tag ?>>
<?php else: ?>
                    <<?= $tag ?> class="ref-thumb ph"<?= $link ?> aria-hidden="true"><?= empty($project['url']) && !empty($project['repo']) ? github_icon() : placeholder_icon('globe') ?><span><?= e($name) ?></span></<?= $tag ?>>
<?php endif;
}

// One reference card from PROJECTS (data.php)
function ref_card(array $project): void
{ ?>
                <div class="ref-card">
<?php ref_thumb($project); ?>
                    <div class="ref-card-name"><?= e(loc($project['name'])) ?></div>
                    <p class="ref-card-desc"><?= e(loc($project['desc'])) ?></p>
                    <div class="ref-card-footer">
                        <div class="ref-tags">
<?php foreach ($project['tags'] as $tag): ?>
                            <span class="ref-tag"><?= e($tag) ?></span>
<?php endforeach; ?>
                        </div>
                        <span class="ref-status <?= $project['status'] ?>"><?= t('status_' . $project['status']) ?></span>
                    </div>
<?php if (!empty($project['url']) || !empty($project['repo'])): ?>
                    <div class="ref-links">
<?php if (!empty($project['url'])): ?>
                        <a href="<?= e($project['url']) ?>" target="_blank" rel="noopener" class="ref-link"><?= t('link_visit') ?></a>
<?php endif; ?>
<?php if (!empty($project['repo'])): ?>
                        <a href="<?= e(GITHUB_URL . '/' . $project['repo']) ?>" target="_blank" rel="noopener"
                            class="ref-link"><?= github_icon() ?>GitHub</a>
<?php endif; ?>
                    </div>
<?php endif; ?>
                </div>

<?php }

// Footer with the company's registration details
function site_footer(): void
{ ?>
    <footer>
        <div class="footer-legal">
            <strong><?= e(COMPANY['name']) ?></strong>, <?= e(COMPANY['street']) ?>,
            <?= e(COMPANY['zip'] . ' ' . COMPANY['city']) ?><br />
            <?= t('legal_ico') ?>: <?= COMPANY['ico'] ?> · <?= t('legal_dic') ?>: <?= COMPANY['dic'] ?> ·
            <?= t('legal_ic_dph') ?>: <?= COMPANY['ic_dph'] ?><br />
            <?= t('legal_register') ?>
        </div>
        <div class="footer-meta">
            <span>© <?= date('Y') ?> <a href="<?= page_url('home') ?>"><?= e(COMPANY['name']) ?></a> <?= t('footer_rights') ?></span>
            <a href="<?= GITHUB_URL ?>" target="_blank" rel="noopener" class="footer-github"><?= github_icon() ?>GitHub</a>
            <span class="footer-analytics"><?= t('footer_analytics') ?></span>
        </div>
    </footer>
<?php }
