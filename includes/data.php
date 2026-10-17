<?php
/* ═══════════════════════════════════════════════════════════
   data — Company details, links, skills and references
   Texts that differ per language are ['sk' => …, 'en' => …].
   ═══════════════════════════════════════════════════════════ */

const SITE_URL   = 'https://codehero.sk';
const EMAIL      = 'support@codehero.sk';
const GITHUB_URL = 'https://github.com/irelevant25';

// Údaje z obchodného registra — the footer must show them (§3a Obchodného zákonníka)
const COMPANY = [
    'name'    => 'Code Hero s.r.o.',
    'street'  => 'Ulica A. Sládkoviča 2098/5',
    'zip'     => '915 01',
    'city'    => 'Nové Mesto nad Váhom',
    'ico'     => '56461909',
    'dic'     => '2122315085',
    'ic_dph'  => 'SK2122315085',
    'founded' => '2024-08-22',
];

// level = width of the bar in %, years = i18n key of the label on the right
const SKILLS = [
    ['name' => 'Angular / TypeScript', 'years' => 'years_6',   'level' => 94],
    ['name' => 'HTML / CSS / JS',      'years' => 'years_exp', 'level' => 92],
    ['name' => '.NET / C# / Blazor',   'years' => 'years_2',   'level' => 72],
    ['name' => 'SQL / PostgreSQL',     'years' => 'years_exp', 'level' => 62],
    ['name' => 'PHP',                  'years' => 'years_exp', 'level' => 60],
    ['name' => 'Node.js',              'years' => 'years_exp', 'level' => 55],
    ['name' => 'Docker',               'years' => 'years_exp', 'level' => 50],
];

// Reference cards, in the order they are shown.
// status:   live | wip | planned | archived
// url      = the live site (optional), repo = repository under GITHUB_URL (optional)
// image    = screenshot in assets/refs/, 800×450 WebP (optional; without it the card shows an icon)
// internal = true for a system with nothing public to show (lock icon instead of a screenshot)
const PROJECTS = [
    'client' => [
        [
            'name'   => 'divadielkogaleria.sk',
            'desc'   => [
                'sk' => 'Web pre divadielko a galériu. Plne vlastný CMS s redakčným systémom. Projekt v príprave.',
                'en' => 'Website for a theatre and gallery. Fully custom CMS with editorial system. Project in preparation.',
            ],
            'tags'   => ['PHP', 'PostgreSQL', 'CMS'],
            'status' => 'wip',
            'url'    => 'https://divadielkogaleria.sk',
            'repo'   => 'divadielko-galeria-fp',
            'image'  => 'divadielkogaleria.webp',
        ],
        [
            'name'   => 'audiolux.sk',
            'desc'   => [
                'sk' => 'Prezentačný web firmy, ktorá zabezpečuje zvuk, svetlá a mobilné pódium na koncerty, festivaly a firemné akcie. Prehľad techniky, galéria a kontaktný formulár.',
                'en' => 'Presentation website for a company providing sound, lighting and a mobile stage for concerts, festivals and corporate events. Equipment overview, gallery and contact form.',
            ],
            'tags'   => ['HTML', 'CSS', 'JS', 'PHP'],
            'status' => 'live',
            'url'    => 'https://audiolux.sk',
            'repo'   => 'audiolux-fp',
            'image'  => 'audiolux.webp',
        ],
        [
            'name'   => ['sk' => 'Trenčianske vodárne a kanalizácie', 'en' => 'Trenčín waterworks and sewerage'],
            'desc'   => [
                'sk' => 'Vývoj interných systémov pre vodárenské procesy aj verejného portálu spoločnosti. Full-stack riešenie v ASP.NET a Blazor.',
                'en' => 'Development of internal systems for water management processes and of the company\'s public portal. Full-stack solution in ASP.NET and Blazor.',
            ],
            'tags'   => ['ASP.NET', 'Blazor', 'FE + BE'],
            'status' => 'live',
            'url'    => 'https://tvkas.sk',
        ],
        [
            'name'   => ['sk' => 'Úrad verejného zdravotníctva SR', 'en' => 'Public Health Authority of the SR'],
            'desc'   => [
                'sk' => 'Vývoj frontendu interných systémov aj verejného portálu úradu v Angular.',
                'en' => 'Frontend development of the authority\'s internal systems and public portal in Angular.',
            ],
            'tags'   => ['Private', 'Angular', 'FE'],
            'status' => 'live',
            'url'    => 'https://www.uvzsr.sk/web/uvz',
        ],
        [
            'name'   => ['sk' => 'Centrálna Integračná Platforma', 'en' => 'Central Integration Platform'],
            'desc'   => [
                'sk' => 'Rozširovanie integračnej platformy v Talend — transformácia dát medzi vládnym cloudom a ďalšími systémami, ktoré k nim majú prístup.',
                'en' => 'Extending the integration platform in Talend — transforming data between the government cloud and other systems with access to it.',
            ],
            'tags'     => ['Private', 'Talend', 'Integration'],
            'status'   => 'live',
            'internal' => true,
        ],
        [
            'name'   => ['sk' => 'Úrad pre reguláciu elekt. komunikácií', 'en' => 'Regulatory Authority for Electronic Comm.'],
            'desc'   => [
                'sk' => 'Frontend interných systémov aj verejného portálu úradu pre elektronické komunikácie a poštové služby v Angular.',
                'en' => 'Angular frontend of the internal systems and the public portal of the regulatory authority for electronic communications and postal services.',
            ],
            'tags'   => ['Private', 'Angular', 'FE'],
            'status' => 'live',
            'url'    => 'https://www.teleoff.gov.sk/',
            'image'  => 'teleoff.webp',
        ],
        [
            'name'   => ['sk' => 'Monitorovací systém pre reguláciu', 'en' => 'Monitoring System for Regulation'],
            'desc'   => [
                'sk' => 'Frontend vývoj monitorovacieho systému pre reguláciu a štátny dohľad v Angular.',
                'en' => 'Frontend development of a monitoring system for regulation and state supervision in Angular.',
            ],
            'tags'     => ['Private', 'Angular', 'FE'],
            'status'   => 'live',
            'internal' => true,
        ],
        [
            'name'   => ['sk' => 'Ústav súdneho inžinierstva v Žiline', 'en' => 'Institute of Forensic Engineering Žilina'],
            'desc'   => [
                'sk' => 'Frontend Angular aplikácia pre potreby Ústavu súdneho inžinierstva Žilinskej univerzity.',
                'en' => 'Angular frontend application for the Institute of Forensic Engineering at the University of Žilina.',
            ],
            'tags'     => ['Private', 'Angular', 'FE'],
            'status'   => 'live',
            'internal' => true,
        ],
    ],

    'personal' => [
        [
            'name'   => 'anotoki.eu',
            'desc'   => [
                'sk' => 'Centrálny rozcestník pre vedľajšie projekty anotoki.eu — fanúšikovské a vzdelávacie weby.',
                'en' => 'Central hub for anotoki.eu side projects — fan and educational websites.',
            ],
            'tags'   => ['PHP', 'HTML', 'CSS'],
            'status' => 'wip',
            'url'    => 'https://anotoki.eu',
            'repo'   => 'anotoki',
            'image'  => 'anotoki.webp',
        ],
        [
            'name'   => 'genshin.anotoki.eu',
            'desc'   => [
                'sk' => 'Fan stránka pre hru Genshin Impact — databáza postáv, zbraní a materiálov, denné kvízy a minihry. Prihlásenie cez spoločný anotoki účet.',
                'en' => 'Fan site for Genshin Impact — a database of characters, weapons and materials, daily quizzes and mini-games. Sign-in with the shared anotoki account.',
            ],
            'tags'   => ['PHP', 'Angular', 'PostgreSQL'],
            'status' => 'live',
            'url'    => 'https://genshin.anotoki.eu',
            'repo'   => 'anotoki-genshin-impact',
            'image'  => 'genshin.webp',
        ],
        [
            'name'   => 'builder.anotoki.eu',
            'desc'   => [
                'sk' => 'Analyzátor buildov pre Genshin Impact a Honkai: Star Rail. Načíta herný účet, porovná postavy s odporúčanými buildmi z komunitných stránok a navrhne, čo zlepšiť.',
                'en' => 'Build analyzer for Genshin Impact and Honkai: Star Rail. Imports your game account, compares characters with recommended builds from community sites and suggests what to improve.',
            ],
            'tags'   => ['PHP', 'Angular', 'PostgreSQL'],
            'status' => 'wip',
            'url'    => 'https://builder.anotoki.eu',
            'repo'   => 'anotoki-build-analyzer',
            'image'  => 'builder.webp',
        ],
        [
            'name'   => 'survey.anotoki.eu',
            'desc'   => [
                'sk' => 'Dotazníky pre anotoki weby v štýle herných prieskumov — otázky v krokoch aj s obrázkami, editor s náhľadom, výsledky po otázkach aj respondentoch a export do CSV.',
                'en' => 'Surveys for the anotoki sites in the style of in-game surveys — step-by-step questions with pictures, an editor with preview, results per question and per respondent, CSV export.',
            ],
            'tags'   => ['PHP', 'Angular', 'PostgreSQL'],
            'status' => 'live',
            'url'    => 'https://survey.anotoki.eu',
            'repo'   => 'anotoki-survey',
            'image'  => 'survey.webp',
        ],
        [
            'name'   => 'iam.anotoki.eu',
            'desc'   => [
                'sk' => 'Jeden účet pre všetky anotoki weby — vlastný OpenID Connect poskytovateľ: registrácia, prihlásenie heslom, kódom z e-mailu alebo cez Google, dvojfaktorové overenie a jednotné prihlásenie (SSO).',
                'en' => 'One account for every anotoki site — a custom OpenID Connect provider: sign-up, sign-in with a password, an e-mailed code or Google, two-factor authentication and single sign-on.',
            ],
            'tags'   => ['PHP', 'Angular', 'PostgreSQL', 'OIDC'],
            'status' => 'live',
            'url'    => 'https://iam.anotoki.eu',
            'repo'   => 'anotoki-iam',
            'image'  => 'iam.webp',
        ],
        [
            'name'   => 'japanese.anotoki.eu',
            'desc'   => [
                'sk' => 'Študijný portál k začiatočníckemu kurzu japončiny — tréner kanji s opakovaním v rozostupoch a test s viac ako 11 000 otázkami vrátane počúvania.',
                'en' => 'Study companion for a beginner Japanese course — a spaced-repetition kanji trainer and an exam with over 11,000 questions, including listening.',
            ],
            'tags'   => ['PHP', 'Angular', 'PostgreSQL'],
            'status' => 'wip',
            'url'    => 'https://japanese.anotoki.eu',
            'repo'   => 'anotoki-japanese-academy',
            'image'  => 'japanese.webp',
        ],
        [
            'name'   => 'starrail.anotoki.eu',
            'desc'   => [
                'sk' => 'Fan stránka pre hru Honkai: Star Rail. V pláne.',
                'en' => 'Fan site for Honkai: Star Rail. Planned.',
            ],
            'tags'   => ['PHP', 'Angular'],
            'status' => 'planned',
        ],
        [
            'name'   => 'CamNode',
            'desc'   => [
                'sk' => 'Self-hosted nahrávanie z ONVIF kamier s webovým rozhraním — živý obraz v prehliadači, automatický záznam pri detekcii pohybu, archív v SQLite a nasadenie ako jeden Docker kontajner.',
                'en' => 'Self-hosted ONVIF camera recorder with a browser UI — live view, automatic recording on motion detection, an SQLite archive and deployment as a single Docker container.',
            ],
            'tags'   => ['Node.js', 'ONVIF', 'SQLite', 'Docker'],
            'status' => 'live',
            'repo'   => 'CamNode',
            'image'  => 'camnode.webp',
        ],
        [
            'name'   => 'Mixion',
            'desc'   => [
                'sk' => 'Audio mixér a router pre Windows nad VB-CABLE — routovacia matica, kanály s EQ, kompresorom a gate a VU metre v prehliadači. Jeden .exe s .NET 8 enginom a Angular UI.',
                'en' => 'Audio mixer and router for Windows on top of VB-CABLE — routing matrix, channel strips with EQ, compressor and gate, and VU meters in the browser. One .exe with a .NET 8 engine and an Angular UI.',
            ],
            'tags'   => ['C#', '.NET 8', 'Angular', 'WASAPI'],
            'status' => 'live',
            'repo'   => 'Mixion',
            'image'  => 'mixion.webp',
        ],
        [
            'name'   => 'youtube download/view tracker',
            'desc'   => [
                'sk' => 'Electron aplikácia s TamperMonkey rozšírením, ktorá automaticky stiahne YouTube video pri lajknutí. Fronta, metadáta, system tray.',
                'en' => 'Electron app with a TamperMonkey extension that auto-downloads YouTube videos when liked. Download queue, metadata embedding and system tray.',
            ],
            'tags'   => ['Electron', 'JS', 'TamperMonkey'],
            'status' => 'live',
            'repo'   => 'yt-download-view-tracker',
            'image'  => 'yt-tracker.webp',
        ],
        [
            'name'   => 'youtube archiver',
            'desc'   => [
                'sk' => 'Vlastnoobslužný webový archivár YouTube videí a audia. Dockerizovaný PHP backend s real-time sledovaním sťahovania.',
                'en' => 'Self-hosted YouTube video and audio archiver. Dockerized PHP backend with a web UI and real-time download progress monitoring.',
            ],
            'tags'   => ['PHP', 'Docker', 'yt-dlp'],
            'status' => 'live',
            'repo'   => 'yt-archiver',
            'image'  => 'yt-archiver.webp',
        ],
        [
            'name'   => 'subdelay',
            'desc'   => [
                'sk' => 'CLI nástroj na posúvanie načasovania titulkov v súboroch .srt a .ass. Bez externých závislostí, presnosť na milisekundy.',
                'en' => 'CLI utility for shifting subtitle timing in .srt and .ass files. Zero dependencies, millisecond precision.',
            ],
            'tags'   => ['Node.js', 'CLI'],
            'status' => 'live',
            'repo'   => 'subdelay',
            'image'  => 'subdelay.webp',
        ],
        [
            'name'   => 'XRayAnalyzer',
            'desc'   => [
                'sk' => 'Desktopová Windows aplikácia pre analýzu röntgenfluorescenčných dát. UI v C# WPF, výpočtové algoritmy v Pythone. Projekt ukončený.',
                'en' => 'Windows desktop app for X-ray fluorescence spectrometry analysis. WPF/.NET UI with Python computational backend. No longer maintained.',
            ],
            'tags'   => ['C#', 'WPF', 'Python'],
            'status' => 'archived',
            'repo'   => 'XRayAnalyzer',
            'image'  => 'xrayanalyzer.webp',
        ],
    ],
];
