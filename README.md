# Codeigniter4-Shield-Tailwind Template

[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url] 
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![Unlicense License][license-shield]][license-url]
![Quick Start](https://img.shields.io/badge/Quick%20Start-5%20minutes-green?style=for-the-badge)
[![LinkedIn][linkedin-shield]][linkedin-url]
[![Official Website][mywebsite-shield]][mywebsite-url]
[![You Tube Channel][subscribe-shield]][subscribe-url]

## Overview

A work in progress! This repository provides a starter template for
**CodeIgniter 4**, configured to get your application up and running quickly.

I am trying several ways and will leave options open to suit your needs.

This repository includes:

- CodeIgniter v4.6.3
- CodeIgniter Shield v1.2.0
- Tailwind v4.1.13
- Vite v7.1.7

## Requirements

Ensure you have the following installed before starting:

- **PHP 8.2** or later
- **Node.js 18** or later
- **Composer** command (See
  [Composer Installation](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos))
- **Git**

## How to Use

### (A.) Clone the Project

Choose one of the following methods to clone the project into your desired
folder:

**Using Composer:**

```bash
composer create-project mauijay/ci4-shield-tailwinds my-new-ci4-project --stability dev
```

**Or using Git:**

```bash
git clone https://github.com/mauijay/ci4-shield-tailwinds.git my-new-ci4-project
```

**Navigate to the project folder:**

```bash
cd my-new-ci4-project
composer install
cp env .env
php spark migrate --all
php spark serve --port 8081
```

The application should now be accessible at <http://localhost:8081>

## (B.) Setup fresh install

### Step 1: Install Dependencies

```bash
# ✅ Install CodeIgniter4
composer create-project codeigniter4/appstarter my-new-ci4-project
cd my-new-ci4-project

# ✅ Install Dependencies
composer install

# ✅ Copy environment file
cp env .env
# Configure your database and other settings in .env

# ✅ Install Shield Authentication
composer require codeigniter4/shield

# ✅ Publish Shield configuration
php spark shield:setup

# ✅ Run migrations
php spark migrate --all

# ✅ Install Node dependencies
npm install -D @tailwindcss/vite tailwindcss@latest vite daisyui prettier prettier-plugin-tailwindcss
```

### Step 2: Create input.css with Tailwind v4 syntax

Create `src/assets/input.css`:

```css
@import "tailwindcss";
@source "./app/Views/**/*.php";
@source "./themes/**/*.{html,php,js}";

/* DaisyUI Plugin Configuration */
@plugin "daisyui" {
  themes: ["nord", "dark"];
  darkTheme: "dark";
  base: true;
  styled: true;
  utils: true;
}

@theme {
  --font-sans: "Poppins", ui-sans-serif, system-ui, sans-serif;
}
```

### Step 3: Configure Vite (vite.config.js)

```javascript
import tailwindcss from "@tailwindcss/vite";
import { defineConfig } from "vite";
import { VitePWA } from "vite-plugin-pwa";

export default defineConfig(() => {
  return {
    plugins: [
      tailwindcss(),
      VitePWA({
        registerType: "autoUpdate",
        workbox: {
          globPatterns: ["**/*.{js,css,html,ico,png,svg}"],
        },
        manifest: {
          name: "CI4 Shield Tailwind",
          short_name: "CI4App",
          description: "CodeIgniter4 starter with Shield Auth & Tailwind",
          theme_color: "#5e81ac",
          icons: [
            {
              src: 'pwa-192x192.png',
              sizes: '192x192',
              type: 'image/png'
            },
            {
              src: 'pwa-512x512.png',
              sizes: '512x512',
              type: 'image/png'
            }
          ]
        },
        outDir: "./public",
      }),
    ],
    build: {
      manifest: true,
      rollupOptions: {
        input: {
          "css/app": "./src/assets/input.css",
          "css/admin": "./themes/admin/css/admin.css",
          "css/default": "./themes/default/css/app.css",
          "js/main": "./src/assets/main.js",
          "js/admin": "./themes/admin/js/admin.js",
        },
      },
      outDir: "./public/assets",
      assetsDir: ".",
      copyPublicDir: false,
    },
  };
});
```

### Step 4: Build Commands (Updated)

#### Development Commands

```bash
# CSS Development (Tailwind CLI - Faster for CSS-only changes)
npm run start:css         # Tailwind CLI watch mode - outputs to public/assets/css/styles.css
npm run admin:css         # Watch admin theme CSS - outputs to public/assets/css/admin.css

# Full Development (Vite - Complete asset pipeline with HMR)
npm run dev              # Vite dev server with hot reload, JS bundling, etc.
```

#### Production Commands

```bash
# CSS Production (Tailwind CLI)
npm run build:css        # Minified CSS build via Tailwind CLI

# Full Production (Vite)
npm run build           # Complete Vite production build with asset optimization
npm run serve           # Preview production build
```

#### Build Method Comparison

| Command             | Tool Used              | Output                               | Use Case                               |
| ------------------- | ---------------------- | ------------------------------------ | -------------------------------------- |
| `npm run start:css` | Tailwind CLI           | `./public/assets/css/styles.css`     | Quick CSS-only development             |
| `npm run dev`       | Vite + Tailwind plugin | Multiple assets via `vite.config.js` | Full development with HMR, JS bundling |
| `npm run build:css` | Tailwind CLI           | Minified CSS file                    | CSS-only production build              |
| `npm run build`     | Vite                   | Complete asset pipeline              | Full production build                  |

#### When to Use Each Command

**Use `npm run start:css` when:**

- Making only CSS/Tailwind changes
- Want faster compilation (no JS bundling overhead)
- Working on styling without JavaScript modifications

**Use `npm run dev` when:**

- Developing full-stack features
- Need hot module replacement (HMR)
- Working with JavaScript, images, and other assets
- Want the complete development experience

#### Development Workflow Examples

**CSS-focused development:**

```bash
# Terminal 1: Start PHP server
php spark serve --port 8081

# Terminal 2: Watch CSS changes
npm run start:css
```

**Full-stack development:**

```bash
# Terminal 1: Start PHP server
php spark serve --port 8081

# Terminal 2: Start complete asset pipeline
npm run dev
```

## Available Scripts

```bash
# Development
npm run dev                # Start Vite dev server
npm run start:css         # Watch Tailwind CSS compilation (CLI)
npm run admin:css         # Watch admin theme CSS

# Production
npm run build             # Build for production (Vite)
npm run build:css         # Build minified CSS (Tailwind CLI)
npm run serve             # Preview production build

# Code Quality
npm run prettier          # Check code formatting
npm run prettier:fix      # Fix code formatting
npm run php-cs            # Check PHP code style
npm run php-cs-fix        # Fix PHP code style
npm run format            # Run both prettier and PHP-CS-Fixer

# Version Management
npm run commit            # Conventional commits with Commitizen
npm run changelog         # Generate changelog
npm run changelog:first   # Generate initial changelog
npm run version:patch     # Bump patch version + changelog
npm run version:minor     # Bump minor version + changelog
npm run version:major     # Bump major version + changelog
```

## Project Structure

```
ci4-shield-tailwinds/
├── app/
│   ├── Controllers/
│   │   └── Admin/           # Admin controllers
│   ├── Views/
│   │   ├── admin/          # Admin views
│   │   ├── auth/           # Authentication views
│   │   ├── layouts/        # Layout templates
│   │   └── pages/          # Public pages
├── public/
│   └── assets/
│       ├── css/            # Compiled CSS files
│       └── js/             # JavaScript files
├── src/
│   └── assets/
│       ├── input.css       # Main Tailwind CSS file
│       └── main.js         # Main JavaScript file
├── themes/
│   ├── admin/              # Admin theme assets
│   ├── auth/               # Auth theme assets
│   └── default/            # Default theme assets
├── vite.config.js          # Vite configuration
└── package.json            # NPM dependencies and scripts
```

## Features

- ✅ **CodeIgniter 4.6.3** - Latest stable version
- ✅ **Shield Authentication** - Complete auth system with groups/permissions
- ✅ **Tailwind CSS v4** - Latest version with new CSS-first approach
- ✅ **DaisyUI Components** - Beautiful UI components
- ✅ **Vite Integration** - Fast development and optimized builds
- ✅ **PWA Ready** - Service worker and offline support
- ✅ **Admin Panel** - Pre-built admin interface
- ✅ **Theme System** - Multiple theme support
- ✅ **Code Quality Tools** - PHP-CS-Fixer, Prettier, Commitizen
- ✅ **Automated Changelog** - Conventional commits and versioning

**Note:** Make sure to add PWA icon files (`pwa-192x192.png` and `pwa-512x512.png`) to your `public` directory for the PWA manifest to work properly.

## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`npm run commit`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<!-- MARKDOWN LINKS & IMAGES -->

[contributors-shield]:
  https://img.shields.io/github/contributors/mauijay/ci4-shield-tailwinds.svg?style=for-the-badge
[contributors-url]:
  https://github.com/mauijay/ci4-shield-tailwinds/graphs/contributors
[forks-shield]:
  https://img.shields.io/github/forks/mauijay/ci4-shield-tailwinds.svg?style=for-the-badge
[forks-url]: https://github.com/mauijay/ci4-shield-tailwinds/network/members
[stars-shield]:
  https://img.shields.io/github/stars/mauijay/ci4-shield-tailwinds.svg?style=for-the-badge
[stars-url]: https://github.com/mauijay/ci4-shield-tailwinds/stargazers
[issues-shield]:
  https://img.shields.io/github/issues/mauijay/ci4-shield-tailwinds.svg?style=for-the-badge
[issues-url]: https://github.com/mauijay/ci4-shield-tailwinds/issues
[license-shield]:
  https://img.shields.io/github/license/mauijay/ci4-shield-tailwinds.svg?style=for-the-badge
[license-url]: https://github.com/mauijay/ci4-shield-tailwinds/blob/main/LICENSE
[linkedin-shield]:
  https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/jlamping
[mywebsite-shield]:
  https://img.shields.io/badge/website-000000?style=for-the-badge&logo=About.me&logoColor=white
[mywebsite-url]: https://808.biz
[subscribe-shield]:
  https://img.shields.io/badge/YouTube-FF0000?style=for-the-badge&logo=youtube&logoColor=white
[subscribe-url]: https://youtube.com/@808biz
