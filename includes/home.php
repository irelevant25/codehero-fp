<?php require_once __DIR__ . '/bootstrap.php'; ?>
<!DOCTYPE html>
<html lang="<?= LANG ?>" data-theme="auto">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= t('meta_title') ?></title>
    <meta name="description" content="<?= t('meta_desc') ?>" />
<?php seo_head('home'); ?>
<?php head_common('home'); ?>
    <link rel="stylesheet" href="/css/variables.css" />
    <link rel="stylesheet" href="/css/base.css" />
    <link rel="stylesheet" href="/css/nav.css" />
    <link rel="stylesheet" href="/css/hero.css" />
    <link rel="stylesheet" href="/css/components.css" />
    <link rel="stylesheet" href="/css/sections.css" />
    <script async defer src="https://umami.codehero.sk/script.js"
        data-website-id="8e8b45ae-1567-4c22-9b62-c54b69e7d3d9"></script>
</head>

<body>

    <!-- ═══════════════════ NAV ═══════════════════ -->
    <nav>
        <a class="nav-logo" href="#hero">Code Hero<span> s.r.o.</span></a>

        <ul class="nav-links" id="navLinks">
            <li><a href="#about"><?= t('nav_about') ?></a></li>
            <li><a href="#services"><?= t('nav_services') ?></a></li>
            <li><a href="#references"><?= t('nav_refs') ?></a></li>
            <li><a href="#availability"><?= t('nav_avail') ?></a></li>
            <li><a href="#contact"><?= t('nav_contact') ?></a></li>
        </ul>

        <div class="nav-controls">
<?php lang_switch('home'); ?>
            <button class="icon-btn" id="themeBtn" title="<?= t('theme_toggle') ?>" aria-label="<?= t('theme_toggle') ?>">
                <svg id="themeIconSun" viewBox="0 0 24 24" style="display:none">
                    <circle cx="12" cy="12" r="5" />
                    <line x1="12" y1="1" x2="12" y2="3" />
                    <line x1="12" y1="21" x2="12" y2="23" />
                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64" />
                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78" />
                    <line x1="1" y1="12" x2="3" y2="12" />
                    <line x1="21" y1="12" x2="23" y2="12" />
                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36" />
                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22" />
                </svg>
                <svg id="themeIconMoon" viewBox="0 0 24 24">
                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z" />
                </svg>
            </button>
            <button class="icon-btn hamburger" id="hamburger" aria-label="<?= t('menu_toggle') ?>">
                <svg viewBox="0 0 24 24">
                    <line x1="3" y1="6" x2="21" y2="6" />
                    <line x1="3" y1="12" x2="21" y2="12" />
                    <line x1="3" y1="18" x2="21" y2="18" />
                </svg>
            </button>
        </div>
    </nav>

    <main>

        <!-- ═══════════════════ HERO ═══════════════════ -->
        <section id="hero">
            <div class="hero-bg"></div>
            <div class="hero-inner">
                <div class="hero-text">
                    <div class="hero-badge"><?= t('hero_badge') ?></div>
                    <h1>
                        <span><?= t('hero_h1a') ?></span><br>
                        <span class="accent"><?= t('hero_h1b') ?></span>
                    </h1>
                    <p class="hero-sub"><?= t('hero_sub') ?></p>
                    <div class="hero-actions">
                        <a href="#contact" class="btn btn-primary"><?= t('hero_cta1') ?></a>
                        <a href="#references" class="btn btn-outline"><?= t('hero_cta2') ?></a>
                    </div>
                </div>

                <div class="hero-visual" aria-hidden="true">
                    <div class="hero-card">
                        <div class="hero-card-header">
                            <div class="hero-card-dot dot-red"></div>
                            <div class="hero-card-dot dot-yellow"></div>
                            <div class="hero-card-dot dot-green"></div>
                            <div class="line"></div>
                        </div>
                        <div class="code-line primary medium"></div>
                        <div class="code-line short" style="margin-left:20px"></div>
                        <div class="code-line primary" style="width:75%;margin-left:20px"></div>
                        <div class="code-line" style="width:55%;margin-left:40px"></div>
                        <div class="code-line primary" style="width:65%;margin-left:40px"></div>
                        <div class="code-line short" style="margin-left:20px"></div>
                        <div class="code-line" style="width:45%"></div>
                        <div class="code-line primary medium" style="margin-top:16px"></div>
                        <div class="tech-tags">
                            <span class="tech-tag">Angular</span>
                            <span class="tech-tag">.NET</span>
                            <span class="tech-tag">PHP</span>
                            <span class="tech-tag">CMS</span>
                            <span class="tech-tag">TypeScript</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="section-divider"></div>

        <!-- ═══════════════════ ABOUT ═══════════════════ -->
        <section id="about" class="fade-up">
            <p class="section-label"><?= t('about_label') ?></p>
            <div class="about-grid">
                <div>
                    <h2><?= t('about_h2') ?></h2>
                    <p class="lead"><?= t('about_lead') ?></p>
                    <p class="text-body"><?= t('about_body') ?></p>
                    <div class="stat-row">
                        <div class="stat">
                            <span class="stat-number">6+</span>
                            <span class="stat-label"><?= t('stat_angular') ?></span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">2+</span>
                            <span class="stat-label"><?= t('stat_dotnet') ?></span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">15+</span>
                            <span class="stat-label"><?= t('stat_projects') ?></span>
                        </div>
                    </div>
                </div>

                <div>
                    <p class="section-label"><?= t('skills_label') ?></p>
                    <div class="skill-list">
<?php foreach (SKILLS as $skill): ?>
                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name"><?= e($skill['name']) ?></span>
                                <span class="skill-years"><?= t($skill['years']) ?></span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-fill" style="width:0%" data-target="<?= (int) $skill['level'] ?>%"></div>
                            </div>
                        </div>
<?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <div class="section-divider"></div>

        <!-- ═══════════════════ SERVICES ═══════════════════ -->
        <div id="services">
            <section class="fade-up">
                <p class="section-label"><?= t('services_label') ?></p>
                <h2><?= t('services_h2') ?></h2>
                <p class="lead"><?= t('services_lead') ?></p>

                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24">
                                <rect x="3" y="3" width="18" height="18" rx="2" />
                                <path d="M3 9h18M9 21V9" />
                            </svg>
                        </div>
                        <h3><?= t('svc1_title') ?></h3>
                        <p><?= t('svc1_desc') ?></p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24">
                                <polyline points="16 18 22 12 16 6" />
                                <polyline points="8 6 2 12 8 18" />
                            </svg>
                        </div>
                        <h3><?= t('svc2_title') ?></h3>
                        <p><?= t('svc2_desc') ?></p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24">
                                <path d="M12 2L2 7l10 5 10-5-10-5z" />
                                <path d="M2 17l10 5 10-5" />
                                <path d="M2 12l10 5 10-5" />
                            </svg>
                        </div>
                        <h3><?= t('svc3_title') ?></h3>
                        <p><?= t('svc3_desc') ?></p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M12 8v4l3 3" />
                            </svg>
                        </div>
                        <h3><?= t('svc4_title') ?></h3>
                        <p><?= t('svc4_desc') ?></p>
                    </div>
                </div>
            </section>
        </div>

        <!-- ═══════════════════ REFERENCES ═══════════════════ -->
        <section id="references" class="fade-up">
            <p class="section-label"><?= t('refs_label') ?></p>
            <h2><?= t('refs_h2') ?></h2>
            <p class="lead"><?= t('refs_lead') ?></p>

            <div class="ref-tabs">
                <button class="ref-tab active" data-tab="client"><?= t('tab_client') ?></button>
                <button class="ref-tab" data-tab="personal"><?= t('tab_personal') ?></button>
            </div>

            <!-- Client projects (cards: PROJECTS in data.php) -->
            <div class="ref-grid active" id="tab-client">
<?php foreach (PROJECTS['client'] as $project) ref_card($project); ?>
            </div>

            <!-- Personal projects -->
            <div class="ref-grid" id="tab-personal">
<?php foreach (PROJECTS['personal'] as $project) ref_card($project); ?>
            </div>
        </section>

        <div class="section-divider"></div>

        <!-- ═══════════════════ AVAILABILITY ═══════════════════ -->
        <div id="availability">
            <section class="fade-up">
                <p class="section-label"><?= t('avail_label') ?></p>
                <h2><?= t('avail_h2') ?></h2>
                <p class="lead"><?= t('avail_lead') ?></p>

                <div class="availability-box">
                    <div class="avail-content">
                        <h3><?= t('avail_box_title') ?></h3>
                        <p><?= t('avail_box_desc') ?></p>
                    </div>
                </div>
            </section>
        </div>

        <!-- ═══════════════════ CONTACT ═══════════════════ -->
        <section id="contact" class="fade-up">
            <p class="section-label"><?= t('contact_label') ?></p>
            <h2><?= t('contact_h2') ?></h2>
            <p class="lead"><?= t('contact_lead') ?></p>

            <div class="contact-grid">
                <div class="contact-items">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                <polyline points="22,6 12,13 2,6" />
                            </svg>
                        </div>
                        <div>
                            <div class="contact-label"><?= t('contact_email_label') ?></div>
                            <div class="contact-value"><?= EMAIL ?></div>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>
                        </div>
                        <div>
                            <div class="contact-label"><?= t('contact_location_label') ?></div>
                            <div class="contact-value"><?= t('contact_location_value') ?></div>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24">
                                <rect x="2" y="7" width="20" height="14" rx="2" />
                                <path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2" />
                            </svg>
                        </div>
                        <div>
                            <div class="contact-label"><?= t('contact_company_label') ?></div>
                            <div class="contact-value"><?= e(COMPANY['name']) ?></div>
                        </div>
                    </div>

                    <a class="contact-item" href="<?= GITHUB_URL ?>" target="_blank" rel="noopener">
                        <div class="contact-icon"><?= github_icon() ?></div>
                        <div>
                            <div class="contact-label">GitHub</div>
                            <div class="contact-value"><?= e(preg_replace('#^https://#', '', GITHUB_URL)) ?></div>
                        </div>
                    </a>
                </div>

                <div class="contact-cta">
                    <h3><?= t('contact_cta_title') ?></h3>
                    <p><?= t('contact_cta_desc') ?></p>
                    <a href="<?= page_url('contact') ?>" class="btn btn-primary"><?= t('contact_cta_btn') ?></a>
                </div>
            </div>
        </section>

    </main>

    <!-- ═══════════════════ FOOTER ═══════════════════ -->
<?php site_footer(); ?>

    <script src="/js/theme.js"></script>
    <script src="/js/app.js"></script>
</body>

</html>
