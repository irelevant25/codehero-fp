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
// status: live | wip | planned | archived
// url  = the live site (optional), repo = repository under GITHUB_URL (optional)
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
        ],
        [
            'name'   => ['sk' => 'Trenčianske vodárne a kanalizácie', 'en' => 'Trenčín waterworks and sewerage'],
            'desc'   => [
                'sk' => 'Vývoj interných aj externých systémov pre správu vodárenských procesov. Full-stack riešenie v ASP.NET a Blazor.',
                'en' => 'Development of internal and external systems for water management processes. Full-stack solution in ASP.NET and Blazor.',
            ],
            'tags'   => ['ASP.NET', 'Blazor', 'FE + BE'],
            'status' => 'live',
            'url'    => 'https://tvkas.sk',
        ],
        [
            'name'   => ['sk' => 'Úrad verejného zdravotníctva SR', 'en' => 'Public Health Authority of the SR'],
            'desc'   => [
                'sk' => 'Vývoj frontendu pre systémy verejného zdravotníctva v Angular.',
                'en' => 'Frontend development for public health systems in Angular.',
            ],
            'tags'   => ['Private', 'Angular', 'FE'],
            'status' => 'live',
        ],
        [
            'name'   => ['sk' => 'Centrálna Integračná Platforma', 'en' => 'Central Integration Platform'],
            'desc'   => [
                'sk' => 'Rozširovanie funkcionality integračnej platformy v Talend prostredí.',
                'en' => 'Extending functionality of the integration platform in Talend environment.',
            ],
            'tags'   => ['Private', 'Talend', 'Integration'],
            'status' => 'live',
        ],
        [
            'name'   => ['sk' => 'Úrad pre reguláciu elekt. komunikácií', 'en' => 'Regulatory Authority for Electronic Comm.'],
            'desc'   => [
                'sk' => 'Frontend Angular aplikácia pre regulačný úrad elektronických komunikácií a poštových služieb.',
                'en' => 'Angular frontend application for the regulatory authority of electronic communications and postal services.',
            ],
            'tags'   => ['Private', 'Angular', 'FE'],
            'status' => 'live',
        ],
        [
            'name'   => ['sk' => 'Monitorovací systém pre reguláciu', 'en' => 'Monitoring System for Regulation'],
            'desc'   => [
                'sk' => 'Frontend vývoj monitorovacieho systému pre reguláciu a štátny dohľad v Angular.',
                'en' => 'Frontend development of a monitoring system for regulation and state supervision in Angular.',
            ],
            'tags'   => ['Private', 'Angular', 'FE'],
            'status' => 'live',
        ],
        [
            'name'   => ['sk' => 'Ústav súdneho inžinierstva v Žiline', 'en' => 'Institute of Forensic Engineering Žilina'],
            'desc'   => [
                'sk' => 'Frontend Angular aplikácia pre potreby Ústavu súdneho inžinierstva Žilinskej univerzity.',
                'en' => 'Angular frontend application for the Institute of Forensic Engineering at the University of Žilina.',
            ],
            'tags'   => ['Private', 'Angular', 'FE'],
            'status' => 'live',
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
        ],
    ],
];
