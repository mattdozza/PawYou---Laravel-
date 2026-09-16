# PawYou 🐾

A Laravel pet-care site — checkups, grooming, boarding, training, and a pet directory — built on Laravel 13, Blade, Tailwind CSS, and Vite.

## Requirements

Install these before doing anything else:

| Tool | Version | Check with | Get it |
|---|---|---|---|
| PHP | 8.3+ | `php -v` | https://php.net (Windows: https://windows.php.net/download or `winget install PHP.PHP.8.3`) |
| Composer | 2.x | `composer -V` | https://getcomposer.org |
| Node.js | 18+ (LTS) | `node -v` | https://nodejs.org |
| npm | comes with Node | `npm -v` | — |
| Git | any recent | `git --version` | https://git-scm.com |

Required PHP extensions (bundled with most PHP installs, but confirm with `php -m`): `pdo_sqlite`, `mbstring`, `openssl`, `tokenizer`, `xml`, `ctype`, `json`, `fileinfo`, `curl`.

The project ships with SQLite as the default database, so **no separate database server (MySQL/Postgres) is required** to run it locally.

## 1. Clone the repo

```bash
git clone https://github.com/mattdozza/PawYou---Laravel-.git pawyou
cd pawyou
```

## 2. Install dependencies

```bash
composer install
npm install
```

## 3. Configure environment

```bash
# macOS/Linux
cp .env.example .env

# Windows (PowerShell or cmd)
copy .env.example .env
```

Generate the app encryption key:

```bash
php artisan key:generate
```

## 4. Set up the database

This project uses SQLite by default (`DB_CONNECTION=sqlite` in `.env`). Create the database file and run migrations:

```bash
# macOS/Linux
touch database/database.sqlite

# Windows (PowerShell)
New-Item -ItemType File -Path database/database.sqlite -Force

# Windows (cmd)
type nul > database\database.sqlite

php artisan migrate
```

> Prefer MySQL/Postgres instead? Edit `.env` and set `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`, then run `php artisan migrate`.

## 5. Run the app

You need **two processes** running at once: the PHP server and the Vite asset bundler (for Tailwind CSS + JS, with hot reload).

**Option A — one command (recommended):**

```bash
composer run dev
```

This runs the PHP server, queue listener, and Vite dev server together, and prints combined output.

**Option B — two terminals:**

```bash
# Terminal 1
php artisan serve

# Terminal 2
npm run dev
```

Then open **http://127.0.0.1:8000** in your browser.

## Everyday commands

| Task | Command |
|---|---|
| Start the app | `composer run dev` (or `php artisan serve` + `npm run dev`) |
| Run tests | `composer test` (or `php artisan test`) |
| Format PHP code | `vendor/bin/pint` |
| Clear cached config after editing `.env` | `php artisan config:clear` |
| Build production frontend assets | `npm run build` |
| Create a new migration | `php artisan make:migration create_x_table` |
| Open a database shell (sqlite) | `php artisan tinker` |

## Project pages

| Route | Description |
|---|---|
| `/` | Home — hero banner, featured services |
| `/about` | About PawYou |
| `/services` | Veterinary checkups, grooming, boarding, training |
| `/pets` | Pet directory (Buddy, Luna, Kiwi, Hazel) |
| `/pets/{id}` | Individual pet profile |
| `/contact` | Contact form |
| `/register`, `/login` | Account creation / sign in |
| `/dashboard` | Logged-in user dashboard |
| `/profile` | Edit account profile |

## Tech stack

- **Backend:** Laravel 13, PHP 8.3+
- **Frontend:** Blade templates, Tailwind CSS 3, Alpine.js
- **Build tool:** Vite
- **Auth:** Laravel Breeze
- **Default DB:** SQLite

## Troubleshooting

- **`Could not open input file: artisan`** — you're not in the project folder. `cd` into it first.
- **`npm error ... Could not read package.json`** — same as above, wrong directory.
- **Blank page / 500 error** — run `php artisan config:clear` and `php artisan cache:clear`, then check `storage/logs/laravel.log`.
- **Styles look broken / unstyled** — the Vite dev server (`npm run dev`) isn't running, or you need `npm run build` for a production-style check.
- **`SQLSTATE[HY000] [14] unable to open database file`** — the `database/database.sqlite` file is missing; recreate it (step 4) and re-run `php artisan migrate`.
- **Permission errors on `storage/` or `bootstrap/cache/`** (macOS/Linux) — run `chmod -R 775 storage bootstrap/cache`.

## Notes

- `.env` is intentionally **not** committed (it holds secrets/local config). Always copy it from `.env.example` on a new machine and re-run `php artisan key:generate`.
- `vendor/` and `node_modules/` are also not committed — `composer install` and `npm install` regenerate them.
