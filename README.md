# Codeigniter4-Shield-Tailwind Template

[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![Unlicense License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]
[![Official Website][mywebsite-shield]][mywebsite-url]
[![You Tube Channel][subscribe-shield]][subscribe-url]

## Overview

A work in progress! This repository provides a starter template for
**CodeIgniter 4**, configured to get your application up and running quickly

This repository includes:

- CodeIgniter v4.6.0
- CodeIgniter Shield v1.1.0
- Tailwind v3.4.17
- Vite v5.4.10

## Requirements

Ensure you have the following installed before starting:

- **PHP 8.2** or later
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
cp env .env
php spark migrate --all
php spark serve --port 8081
```

The application should now be accessible at <http://localhost:8081>

## (B.) Setup fresh install

### Step 1: In a fresh CodeIgniter project folder, run below commands to install package.json, node package and create blank tailwind.config.js

With Vite

```bash
npm create vite@latest . -- --template vue
```

or without (only choose one)

```bash
npm init -y
```

Now add Tailwind css

```bash
npm install -D tailwindcss
npx tailwindcss init
```

Upgrade

```bash
npm install -D tailwindcss@latest autoprefixer@latest postcss@latest
npm install -D @tailwindcss/forms@latest
```

### Step 2: Update tailwind.config.js

```js
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/Views/**/*.php"],
  theme: {
    extend: {},
  },
  plugins: [],
};
```

### Step 3: Create input.css with below code. You can create it anywhere. I created at src > assets > input.css

```code
@tailwind base;
@tailwind components;
@tailwind utilities;
```

### Step 4: In terminal, inside project folder, run these commands. If using a different path for input.css and output css (mine styles.css), then change path accordingly

```bash
npx tailwindcss -i ./src/assets/input.css -o ./public/assets/css/styles.css --watch
npx tailwindcss -i ./src/assets/input.css -o ./public/assets/css/styles.css --minify
```

### Step 5: Now just include a link to the output css file (styles.css) in the head section

```php
<link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
```

With Step 4 command, it will keep running, so if you add any tailwind css class
in php file, it will automatically add that to output css file

## Contributing

Fork it <https://github.com/mauijay/ci4-shield-tailwinds/fork>

- Create your branch (git checkout -b my-new-branch)
- Commit your changes (git commit -m 'Add some stuff')
- Push to the branch (git push origin my-new-branch)
- Create a new Pull Request.

### Hack

Hack is a language that also uses the PHP extension. You can override the
auto-detection by specifying a different language in a .gitattributes file at
the top level of the repository:

```code
*.php linguist-language=PHP
```

### View cells

```php
<?= view_cell('AlertMessageCell', 'type=success, message=alert cell updated successfully!.') ?>
<?= view_cell('SampleListCell', 'type=info, message=This is a sample cell!.') ?>
```

### Vite

```js
import inject from "@rollup/plugin-inject";
import { defineConfig } from "vite";
import vue from "@vitejs/plugin-vue";

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [vue()],
  build: {
    // generate manifest.json in outDir
    manifest: true,
    rollupOptions: {
      // overwrite default .html entry
      input: [
        "./themes/default/css/app.scss",
        "./themes/default/js/app.js",
        "./themes/admin/css/admin.scss",
        "./themes/admin/js/admin.js",
      ],
    },
    outDir: "./public/assets/",
  },
});
```

### dependabot

add this line in your README.md

```code
@dependabot rebase
```
<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->

[mywebsite-shield]:
    https://img.shields.io/badge/Official_Website-Visit-red?style=for-the-badge
[mywebsite-url]:
    https://808.biz
[subscribe-shield]:
    https://img.shields.io/badge/YouTube_Channel-Subscribe-CC0000?style=for-the-badge
[subscribe-url]:
    https://youtube.com/@808biz4?si=kBqv93xorggCujLu
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
[license-url]:
    https://github.com/mauijay/ci4-shield-tailwinds/blob/master/LICENSE.txt
[linkedin-shield]:
    https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/mauijay
[product-screenshot]: src/images/screenshot.png
[Next.js]:
    https://img.shields.io/badge/next.js-000000?style=for-the-badge&logo=nextdotjs&logoColor=white
[Next-url]: https://nextjs.org/
[React.js]:
    https://img.shields.io/badge/React-20232A?style=for-the-badge&logo=react&logoColor=61DAFB
[React-url]: https://reactjs.org/
[Vue.js]:
    https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vuedotjs&logoColor=4FC08D
[Vue-url]: https://vuejs.org/
[Angular.io]:
    https://img.shields.io/badge/Angular-DD0031?style=for-the-badge&logo=angular&logoColor=white
[Angular-url]: https://angular.io/
[Svelte.dev]:
    https://img.shields.io/badge/Svelte-4A4A55?style=for-the-badge&logo=svelte&logoColor=FF3E00
[Svelte-url]: https://svelte.dev/
[Laravel.com]:
    https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[Bootstrap.com]:
    https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
[JQuery.com]:
    https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white
[JQuery-url]: https://jquery.com
