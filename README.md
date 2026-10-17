# codehero-fp

Website of **Code Hero s.r.o.**: <https://codehero.sk> in Slovak and <https://codehero.sk/en/> in English.
Plain PHP, CSS and JavaScript: no build step, no dependencies.

Every page is rendered by PHP with its text already in the HTML, so search engines read it
without running JavaScript, and each language has its own URL.

| Path | What it is |
| --- | --- |
| `index.php`, `contact.php` | Slovak pages (`/`, `/contact.php`) |
| `en/index.php`, `en/contact.php` | English pages (`/en/`, `/en/contact.php`) |
| `includes/home.php`, `includes/contact.php` | the two page templates |
| `includes/i18n.php` | texts of the pages, in both languages |
| `includes/data.php` | company details, skills and the reference cards |
| `includes/partials.php`, `includes/bootstrap.php` | shared markup (head, footer, cards) and helpers |
| `api.php`, `get-token.php` | contact form backend (CSRF token, sending the e-mail) |
| `css/`, `js/` | styles; theme switch, tabs and animations |
| `robots.txt`, `sitemap.xml` | for search engines |
| `assets/refs/` | screenshots on the reference cards (800×450 WebP) |
| `favicon.svg`, `favicon.ico`, `apple-touch-icon.png`, `assets/og-image.png` | icons and the image of link previews |

## Run locally

```sh
php -S 127.0.0.1:8000
```

Then open <http://127.0.0.1:8000/> (English: <http://127.0.0.1:8000/en/>).

## Common changes

- **A reference card**: add an entry to `PROJECTS` in `includes/data.php`: name, description in both
  languages, tags, status (`live`, `wip`, `planned`, `archived`) and optionally the site's `url` and
  the GitHub `repo`. The card gets its *Visit* and *GitHub* links from those two.
- **A screenshot on a card**: save it as an 800×450 WebP (16:9) in `assets/refs/` and put its file
  name in the card's `image`. A card without one shows an icon instead; `'internal' => true` makes
  it a lock with "Interný systém", for work with nothing public to show.
- **A skill**: `SKILLS` in `includes/data.php`; `level` is the width of the bar in %.
- **Any other text**: `includes/i18n.php`, the same key in both languages.

## Deploy

Upload the files. When replacing the old static version, also delete `index.html` and `js/i18n.js`
on the server: the old `index.html` would otherwise still be served in place of `index.php`.
After a bigger content change, update `<lastmod>` in `sitemap.xml`.
