# Deploying to shared hosting (split public/private)

This project is a CodeIgniter 4 app with Vite-built assets.

This guide matches the common shared-hosting layout:

- Public web root: `public_html/oahusb/` (web accessible)
- Private app root: `ci4/oahusb/` (NOT web accessible)

## 1) Target folder layout

On the server, you want something like:

- `~/public_html/oahusb/`
  - `index.php`
  - `.htaccess`
  - `assets/` (Vite build output + manifest)
  - `robots.txt`, `favicon.ico`, etc
- `~/ci4/oahusb/`
  - `app/`
  - `system/`
  - `vendor/`
  - `writable/`
  - `.env`
  - `spark`
  - `composer.json`, `composer.lock`

## 2) Upload/copy the files

### Copy public/ into public_html

Copy everything from this repo’s `public/` folder into:

- `public_html/oahusb/`

### Copy the rest into the private folder

Copy everything EXCEPT `public/` into:

- `ci4/oahusb/`

Notes:

- Do not upload `node_modules/`.
- You can build assets locally and upload `public/assets/` (recommended), or
  build on-server if Node is available.

## 3) Fix the bootstrap path in public_html/oahusb/index.php and spark

Your `index.php` currently expects `../app/Config/Paths.php`.

On shared hosting with a split folder layout, update the `require` line to point
to the private location.

Recommended: use an absolute path (best reliability).

Example (adjust to your hosting account path):

```php
require '/home/YOURUSER/ci4/oahusb/app/Config/Paths.php';
```

Alternative: use a relative path if your folder structure is consistent:

```php
require FCPATH . '../../ci4/oahusb/app/Config/Paths.php';
```

## 4) Configure .env for production

Create `ci4/oahusb/.env` (copy from the repo’s `env` file) and set at least:

- `CI_ENVIRONMENT = production`
- `app.baseURL = 'https://oahusb.com/'`
- Your database settings (`database.default.*`)
- `encryption.key` (strong random string)

Also ensure:

- `writable/` is writable by the web server user
- Production settings don’t expose debug info

## 5) Install PHP dependencies (production)

From `ci4/oahusb/` on the server:

```bash
composer install --no-dev --optimize-autoloader
```

## 6) Build and deploy frontend assets

Vite is configured to output to `public/assets` in this repo.

### Option A (recommended): build locally, upload results

On your local machine:

```bash
npm ci
npm run build
```

Then upload:

- `public/assets/` → `public_html/oahusb/assets/`

Important:

- Vite uses a manifest to know the hashed filenames to load.
- If your FTP client skips hidden folders/files, you may accidentally miss the
  manifest.
- This repo now supports both manifest locations:
  - `assets/manifest.json` (preferred)
  - `assets/.vite/manifest.json` (older Vite default)

### Option B: build on the server (if Node is available)

From `ci4/oahusb/` (or wherever you keep package.json):

```bash
npm ci
npm run build
```

## 7) Apache rewrite rules for a subfolder

If your app is hosted under `/oahusb/`, you may need to set `RewriteBase` in
`public_html/oahusb/.htaccess`.

Example:

```apacheconf
RewriteBase /oahusb/
```

(Only do this if routing breaks; many hosts work fine without it.)

## 8) Database & final checks

From `ci4/oahusb/`:

```bash
php spark migrate --all
```

Then confirm in the browser:

- Pages load without `index.php` in the URL
- CSS/JS load (no references to `http://localhost:5173`)
- Auth pages work
