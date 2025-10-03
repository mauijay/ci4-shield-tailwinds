# CI4 Shield Tailwind CSS

A modern CodeIgniter 4 starter template with Shield Authentication, Tailwind
CSS, and Vite build system.

## Features

- 🔐 **CodeIgniter Shield** - Complete authentication system
- 🎨 **Tailwind CSS** - Utility-first CSS framework
- ⚡ **Vite** - Fast build tool with HMR
- 📱 **PWA Ready** - Progressive Web App capabilities
- 🌙 **Dark Mode** - Built-in dark/light theme support
- 🔧 **Development Tools** - PHPStan, PHP CS Fixer, PHPUnit
- 🏗️ **Modern Architecture** - View Cells, Helpers, and clean structure
- 🔄 **Auto Version Sync** - Synchronized versioning across package.json,
  composer.json, and .env

## Requirements

- PHP 8.2 or higher
- Composer
- Node.js 18+ and npm
- MySQL/MariaDB

## Quick Start

### 1. Clone and Install Dependencies

```bash
git clone https://github.com/yourusername/ci4-shield-tailwinds.git
cd ci4-shield-tailwinds

# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

### 2. Environment Setup

```bash
# Copy environment file
cp env .env

# Generate app key (if needed)
php spark key:generate
```

### 3. Database Configuration

Update your `.env` file with database credentials:

```env
database.default.hostname = localhost
database.default.database = your_database
database.default.username = your_username
database.default.password = your_password
database.default.DBDriver = MySQLi
```

### 4. Run Migrations

```bash
# Run CodeIgniter migrations
php spark migrate --all

# Seed the database (optional)
php spark db:seed DatabaseSeeder
```

## Development Workflows

This project supports **two different development workflows** depending on your
preference:

### Workflow 1: Vite Development Server (Recommended)

For modern development with Hot Module Replacement (HMR):

```bash
# Terminal 1: Start Vite development server (for asset compilation & HMR)
npm run dev

# Terminal 2: Start CodeIgniter development server
php spark serve

# Your app runs at:
# - CodeIgniter: http://localhost:8080 (main application)
# - Vite Dev Server: http://localhost:5173 (asset compilation only)
```

**Benefits:**

- ⚡ Hot Module Replacement (instant CSS/JS updates)
- 🔄 Live reload on file changes
- 🚀 Faster asset compilation
- 🛠️ Modern development tools

### Workflow 2: CLI Build Process

For traditional development or when you prefer manual builds:

```bash
# Terminal 1: Watch and rebuild assets on changes
npm run build:watch

# Terminal 2: Start CodeIgniter development server
php spark serve

# Your app runs at:
# - CodeIgniter: http://localhost:8080 (serves both app and built assets)
```

**Alternative CLI commands:**

```bash
# Build once (for production or testing)
npm run build

# Build and watch for changes
npm run build:watch

# Development build with source maps
npm run build:dev
```

**Benefits:**

- 📁 All assets served from CodeIgniter
- 🎯 Single server setup
- 💾 Pre-built assets for offline work
- 🔧 More control over build process

### Choosing Your Workflow

**Use Vite Dev Server when:**

- You're actively developing frontend features
- You want instant feedback on CSS/JS changes
- You're working with complex Tailwind configurations
- You prefer modern development tools

**Use CLI Build Process when:**

- You're primarily working on backend PHP code
- You have limited system resources
- You're working in environments where multiple ports are restricted
- You prefer traditional build workflows

## Build System

### Asset Structure

```bash
src/
├── assets/
│   ├── css/
│   │   ├── app.css        # Main site styles
│   │   └── admin.css      # Admin panel styles
│   └── js/
│       ├── app.js         # Main site JavaScript
│       ├── admin.js       # Admin panel JavaScript
│       ├── sw.js          # Service Worker
│       └── maps.js        # Maps functionality
```

### Available Scripts

```bash
# Development - Vite Workflow
npm run dev          # Start Vite dev server with HMR
npm run preview      # Preview production build

# Development - CLI Workflow
npm run build        # Build once for production
npm run build:dev    # Build once with dev settings
npm run build:watch  # Build and watch for changes

# CSS-Only Workflow (Alternative)
npm run start:css    # Watch and build main CSS only
npm run admin:css    # Watch and build admin CSS only
npm run build:css    # Build minified CSS for production

# CodeIgniter Server
php spark serve      # Start CodeIgniter development server
php spark serve --port 8081  # Use different port if needed

# Version Management
npm run version:patch # Bump patch version and sync all files
npm run version:minor # Bump minor version and sync all files
npm run version:major # Bump major version and sync all files
npm run sync-version  # Sync current version across all files

# Code Quality & Formatting
composer run ci      # Run all quality checks
composer run cs      # Check code style
composer run cs-fix  # Fix code style issues
composer run stan    # Run PHPStan analysis
composer run test    # Run PHPUnit tests

# Frontend Code Quality
npm run prettier     # Check code formatting
npm run prettier:fix # Fix code formatting
npm run format       # Fix both PHP and frontend formatting

# Git & Changelog
npm run commit       # Interactive commit with conventional changelog
npm run changelog    # Generate changelog
npm run changelog:first # Generate initial changelog
```

## Authentication

This project uses **CodeIgniter Shield** for authentication:

- **Registration**: `/register`
- **Login**: `/login`
- **Dashboard**: `/admin` (requires authentication)
- **Password Reset**: Built-in email-based reset

### Default Users

After running seeders, you can use:

- Email: `admin@example.com`
- Password: `password123`

## Styling

### Tailwind CSS

The project uses Tailwind CSS with custom components:

```php
<!-- Example usage in views -->
<button class="btn-primary">Primary Button</button>
<div class="card">Card Content</div>
```

### Theme System

Built-in theme helper for consistent styling:

```php
<!-- In your views -->
<?= theme()->render('components/button', ['text' => 'Click Me']) ?>
```

### Dark Mode

Toggle between light and dark themes:

```html
<button data-theme-toggle>🌙 Toggle Theme</button>
```

## Progressive Web App (PWA)

The app includes PWA capabilities:

- **Service Worker**: Automatic caching and offline support
- **App Manifest**: Install prompt on mobile devices
- **Icons**: 192x192 and 512x512 app icons included

### PWA Configuration

Update PWA settings in `vite.config.js`:

```javascript
VitePWA({
  manifest: {
    name: "Your App Name",
    short_name: "AppName",
    description: "Your app description",
    theme_color: "#5e81ac",
  },
});
```

## Development Tools

### Code Quality

```bash
# Run PHPStan (static analysis)
composer run stan

# Fix code style with PHP CS Fixer
composer run cs-fix

# Run PHPUnit tests
composer run test

# Run all quality checks
composer run ci
```

### View Cells

Create reusable components with View Cells:

```php
// Example: ServiceModalCell
<?= view_cell('\App\Cells\ServiceModalCell::render', [
    'id' => 'modal1',
    'title' => 'Service Title',
    'content' => 'Service content...'
]) ?>
```

## Directory Structure

```bash
├── app/
│   ├── Cells/              # View Cells for reusable components
│   ├── Controllers/        # Application controllers
│   ├── Entities/          # Data entities
│   ├── Helpers/           # Custom helpers
│   ├── Libraries/         # Custom libraries
│   ├── Models/            # Data models
│   └── Views/             # View templates
│       ├── layouts/       # Layout templates
│       ├── partials/      # Partial views
│       └── pages/         # Page views
├── public/
│   └── assets/            # Built assets (generated)
├── src/
│   └── assets/            # Source assets
└── vendor/                # Composer dependencies
```

## Deployment

### Production Build

```bash
# Build assets for production
npm run build

# Set environment to production
# Update .env: CI_ENVIRONMENT = production

# Optimize Composer autoloader
composer install --no-dev --optimize-autoloader

# Set proper file permissions
chmod -R 755 writable/
```

### Environment Variables

Key environment variables for production:

```env
CI_ENVIRONMENT = production
app.baseURL = 'https://yourdomain.com'
database.default.hostname = your_production_host
database.default.database = your_production_db
```

## Troubleshooting

### Common Issues

**Assets not loading:**

```bash
# Clear CodeIgniter cache
php spark cache:clear

# Rebuild assets
npm run build

# Check if Vite dev server is running (Workflow 1)
curl http://localhost:5173
```

**Port conflicts:**

```bash
# Use different ports if needed
npm run dev -- --port 5174
php spark serve --port 8081
```

**Permission issues:**

```bash
# Fix file permissions (Linux/Mac)
chmod -R 755 writable/
chmod -R 755 public/assets/
```

## Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Run quality checks (`composer run ci`)
4. Commit your changes (`git commit -m 'Add amazing feature'`)
5. Push to the branch (`git push origin feature/amazing-feature`)
6. Open a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file
for details.

## Support

- **Documentation**: [CodeIgniter 4 Docs](https://codeigniter.com/user_guide/)
- **Shield Auth**: [Shield Documentation](https://shield.codeigniter.com/)
- **Tailwind CSS**: [Tailwind Docs](https://tailwindcss.com/docs)
- **Issues**:
  [GitHub Issues](https://github.com/yourusername/ci4-shield-tailwinds/issues)

## Changelog

### v0.3.1

- ✅ Added automatic version synchronization across package.json, composer.json,
  and .env
- ✅ Created version management scripts with Git integration
- ✅ Enhanced version_helper with .env fallback support
- ✅ Improved postversion workflow to include all modified files
- ✅ Added comprehensive version management documentation

### v0.3.0

- ✅ Setup Vite build system with Tailwind CSS v4
- ✅ Added DaisyUI integration for enhanced UI components
- ✅ Configured static asset copying from src/static to public/assets
- ✅ Created vite_helper for intelligent asset loading (CLI vs Vite workflows)
- ✅ Fixed dynamic require errors in Vite configuration
- ✅ Updated development workflows documentation
- ✅ Enhanced build system with manifest generation

### v0.2.9

- ✅ Added dual development workflow support (Vite + CLI)
- ✅ Enhanced vite_helper with better asset detection
- ✅ Improved error handling and fallbacks
- ✅ Added troubleshooting section to README

### v0.2.8

- ✅ Removed Vue.js dependency
- ✅ Configured Vite with Tailwind CSS
- ✅ Added PWA support with service worker
- ✅ Implemented View Cells for reusable components
- ✅ Added development tools (PHPStan, PHP CS Fixer)
- ✅ Enhanced theme system

---

**Built with ❤️ using CodeIgniter 4, Shield, Tailwind CSS, and Vite**

## Version Management

This project includes automatic version synchronization across multiple files to
ensure consistency.

### Synchronized Files

The version sync system keeps these files in sync:

- **package.json** - Node.js package version
- **composer.json** - PHP package version
- **.env** - Application version (`app.version`)

### Version Commands

```bash
# Bump patch version (0.3.0 → 0.3.1)
npm run version:patch

# Bump minor version (0.3.1 → 0.4.0)
npm run version:minor

# Bump major version (0.4.0 → 1.0.0)
npm run version:major

# Manual sync (sync current package.json version to other files)
npm run sync-version
```

### What Happens During Version Bump

1. **Updates package.json** with new version
2. **Syncs composer.json** to match
3. **Updates .env** `app.version` setting
4. **Creates Git tag** (e.g., v0.3.1)
5. **Commits changes** to Git
6. **Pushes to remote** with tags

### Using App Version in Code

Access the synchronized version in your PHP code:

```php
// Get version from .env (preferred)
$version = env('app.version', '0.0.0');

// Or use the helper function
$version = app_version();

// Add version to assets for cache busting
echo "styles.css" . cache_buster(); // styles.css?v=0.3.1
```

### Version Helper

The `version_helper.php` provides convenient functions:

```php
// Get application version
echo app_version(); // "0.3.1"

// Cache buster for assets
echo cache_buster(); // "?v=0.3.1"
```

### Environment-Specific Versioning

Versions are consistent across all environments:

- **Development**: Uses exact version from package.json
- **Testing**: Same version for consistency
- **Production**: Same version for traceability

### Manual Version Update

If you need to manually update versions:

1. **Edit package.json** version
2. **Run sync command**:
   ```bash
   npm run sync-version
   ```
3. **Commit changes**:
   ```bash
   git add .
   git commit -m "chore: update version to X.X.X"
   git tag vX.X.X
   git push && git push --tags
   ```

### Version Sync Issues

**Version mismatch between files:**

```bash
# Manually sync versions
npm run sync-version

# Check current versions
grep '"version"' package.json
grep '"version"' composer.json
grep 'app.version' .env
```

**Git tag conflicts:**

```bash
# List existing tags
git tag -l

# Delete local tag
git tag -d v0.3.1

# Delete remote tag
git push origin --delete v0.3.1
```

**Version bump fails:**

```bash
# Ensure clean working directory
git status
git add .
git commit -m "commit message"

# Then try version bump
npm run version:patch
```

### Clean Approach: Reset and Try Again

#### If you want to be extra careful:

```bash
# See current branch status
git status

# Stage all changes
git add -A

# Check what's about to be committed
git status

# Commit everything
git commit -m "feat: add a couple tests

- Basic Feature Test
- Home Page Test
- Layout Test
- Version Helper Test"

# Now try the version bump
npm run version:patch
```
