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


xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

# hawaii-sb Deployment guide (Shared hosting / cPanel) — CI4 + Git

Coming Soon,

```bash
# Dev-only (local): watch Tailwind output
npx @tailwindcss/cli -i ./src/input.css -o ./public/assets/css/output.css --watch
```

Shared hosting typically cannot run Node/Tailwind on the server, so for production you must build the CSS locally (or in CI) and commit it:

```bash
# Production build (local/CI): one-shot build
npx @tailwindcss/cli -i ./src/input.css -o ./public/assets/css/output.css --minify

git add public/assets/css/output.css
git commit -m "Build Tailwind CSS"
git push
```

ssh into directory to prep git

```bash

cd ~/ci4

# pin the server to main
git checkout main || git checkout -b main origin/main
git branch --set-upstream-to=origin/main main
git pull --ff-only
```

This repo is deployed to shared hosting by **pulling from GitHub on the server** (no FileZilla).

The proven setup is:

- Local dev branch: `develop`
- Production branch: `main`
- Server working copy: `~/ci4/<sitename>`
- Document root (cPanel): `~/ci4/<sitename>/public`
- Authentication: GitHub **SSH deploy key** (read-only is recommended)

This keeps each site self-contained in a single folder under `~/ci4/`.
Unlike a “split” setup (code outside + `public/` inside `public_html/`), cPanel is configured to point the domain/subdomain document root directly at the `public/` folder inside your site directory.

## 1) One-time server setup

### 1.1 Create a GitHub deploy key on the server

SSH into the server, then:

```bash
cd ~
mkdir -p ~/.ssh
chmod 700 ~/.ssh

ssh-keygen -t ed25519 -C "deploy-<sitename>" -f ~/.ssh/<sitename>_github_key
ssh-keygen -t ed25519 -C "deploy-hawaii-sb" -f ~/.ssh/hawaii-sb_github_key
```

Copy the public key:

```bash
cat ~/.ssh/<sitename>_github_key.pub
cat ~/.ssh/hawaii-sb_github_key.pub
```

````

Add it to GitHub:

- Repo → **Settings** → **Deploy keys** → **Add deploy key**
- Paste the `*.pub` contents
- Leave **Allow write access** unchecked unless the server must push back to GitHub

### 1.2 Tell SSH to use that key for GitHub

```bash
# If this server pulls MULTIPLE GitHub repos using different deploy keys,
# use host aliases (recommended). OpenSSH uses the *first* matching Host entry,
# so appending another "Host github.com" block later will NOT override an earlier one.

cat >> ~/.ssh/config <<'EOF'
Host github.com-hawaii-sb
  HostName github.com
  User git
  IdentityFile ~/.ssh/hawaii-sb_github_key
  IdentitiesOnly yes
EOF

chmod 600 ~/.ssh/config
````

Test:

```bash
ssh -T git@github.com-hawaii-sb
```

### 1.3 Clone the repo into the target folder

```bash
mkdir -p ~/ci4
cd ~/ci4
git clone git@github.com:<owner>/<repo>.git <sitename>
git clone git@github.com-hawaii-sb:mauijay/hawaii-sb.git hawaii-sb
cd ~/ci4/<sitename>
cd ~/ci4/hawaii-sb

# pin the server to main
git checkout main || git checkout -b main origin/main
git branch --set-upstream-to=origin/main main
git pull --ff-only

> Note on `--ff-only`: this tells Git to update only if it can do a *fast-forward* (i.e. your local branch has no unique commits and can be advanced by simply moving the branch pointer). If the branch has diverged and a merge commit would be required, Git will refuse and stop instead of merging.
```

### 1.4 Install PHP dependencies (vendor/)

`vendor/` is intentionally not tracked in git, so you must install dependencies on the server:

```bash
cd ~/ci4/<sitename>
composer install --no-dev --optimize-autoloader
```

Run this again whenever `composer.lock` changes.

### 1.4.1 Build frontend assets (Vite + Tailwind)

Shared hosting often does **not** include Node/npm, so you generally **cannot** run `npm install` or `npm run build` on the server.

This project expects built assets under `public/build/`.

Recommended workflow:

- On your dev machine (or CI):

```bash
cd /c/01_Hosting/hawaii-sb
npm install
npm run build
```

- Commit and push the build output so the server receives it on `git pull`:

```bash
git add public/build/
git commit -m "Build frontend assets"
git push origin main
```

On the server, verify these exist after pulling:

- `public/build/assets/` (hashed CSS/JS)
- `public/build/manifest.json` (or `public/build/.vite/manifest.json` depending on Vite version)

If the live site tries to load assets from `http://localhost:5173`, it means the app is emitting **dev-server** tags instead of using built assets.
On production, set `CI_ENVIRONMENT=production` and do not enable `VITE_DEV_SERVER`.

### 1.5 Create server-only `.env`

Never commit `.env`.

```bash
cd ~/ci4/<sitename>
cp env .env
# edit .env for production (baseURL, DB, etc)
```

### 1.6 Set cPanel document root

In cPanel, set the domain/subdomain document root to:

- `~/ci4/<sitename>/public`

## 2) Everyday workflow (no FileZilla)

### 2.1 Local dev (Windows)

Work and test in `develop`, then fast-forward `main`:

```bash
cd /c/01_Hosting/hawaii-sb

git checkout develop
# edit/test

git add -A
git commit -m "Describe change"

git checkout main
git merge --ff-only develop

git push origin main

git checkout develop
```

### 2.2 Server deploy

```bash
cd ~/ci4/<sitename>
git pull --ff-only

# Only needed when composer.lock changes
composer install --no-dev --optimize-autoloader --no-interaction

php spark cache:clear
php spark logs:clear
php spark debugbar:clear
```

## 3) Optional: make deploy one command (server)

Create `deploy.sh` inside the repo:

```bash
cat > ~/ci4/<sitename>/deploy.sh <<'EOF'
#!/usr/bin/env bash
set -euo pipefail
cd "$(dirname "$0")"

git pull --ff-only

# Safe to run every time; required only when composer.lock changes
composer install --no-dev --optimize-autoloader --no-interaction
EOF
chmod +x ~/ci4/<sitename>/deploy.sh
```

Deploy with:

```bash
~/ci4/<sitename>/deploy.sh
```

## 4) Optional: cache SSH key passphrase for the session (ssh-agent)

If your SSH session stays open during the day, load the key once:

```bash
ssh-add -l >/dev/null 2>&1 || eval "$(ssh-agent -s)"
ssh-add ~/.ssh/<sitename>_github_key
ssh-add -l
```

Now `git pull` won’t ask for the passphrase again until you log out.

End-of-day cleanup (optional):

```bash
ssh-agent -k
```

## 5) Common gotchas (shared hosting)

- **`writable/` permissions**: CI4 must write to `writable/` (logs/cache/sessions/uploads). If you get 500 errors, check CI4 logs in `writable/logs/`.
- **Runtime files should not be committed**: `.env`, `vendor/`, and runtime `writable/*` contents should stay out of git.
- **Server-generated logs**: shared hosts often create `public/error_log`; keep it ignored.
- **Uploads**: if your app uses uploads, they typically live under `writable/uploads/` and are not in git. Back them up separately.

