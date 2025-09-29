# CI4 Shield Tailwind CSS

A modern CodeIgniter 4 starter template with Shield Authentication, Tailwind CSS, and Vite build system.

## Features

- 🔐 **CodeIgniter Shield** - Complete authentication system
- 🎨 **Tailwind CSS** - Utility-first CSS framework
- ⚡ **Vite** - Fast build tool with HMR
- 📱 **PWA Ready** - Progressive Web App capabilities
- 🌙 **Dark Mode** - Built-in dark/light theme support
- 🔧 **Development Tools** - PHPStan, PHP CS Fixer, PHPUnit
- 🏗️ **Modern Architecture** - View Cells, Helpers, and clean structure

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

### 5. Development Workflow

```bash
# Terminal 1: Start Vite development server (for assets)
npm run dev

# Terminal 2: Start CodeIgniter development server
php spark serve

# Your app is now running at:
# - CodeIgniter: http://localhost:8080
# - Vite Dev Server: http://localhost:5173 (assets only)
```

## Build System

### Asset Structure

```
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
# Development
npm run dev          # Start Vite dev server with HMR
php spark serve      # Start CodeIgniter server

# Production Build
npm run build        # Build optimized assets for production
npm run preview      # Preview production build

# Code Quality
composer run ci      # Run all quality checks
composer run cs      # Check code style
composer run cs-fix  # Fix code style issues
composer run stan    # Run PHPStan analysis
composer run test    # Run PHPUnit tests
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
    name: 'Your App Name',
    short_name: 'AppName',
    description: 'Your app description',
    theme_color: '#5e81ac',
  }
})
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

```
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

## Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Run quality checks (`composer run ci`)
4. Commit your changes (`git commit -m 'Add amazing feature'`)
5. Push to the branch (`git push origin feature/amazing-feature`)
6. Open a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Support

- **Documentation**: [CodeIgniter 4 Docs](https://codeigniter.com/user_guide/)
- **Shield Auth**: [Shield Documentation](https://shield.codeigniter.com/)
- **Tailwind CSS**: [Tailwind Docs](https://tailwindcss.com/docs)
- **Issues**: [GitHub Issues](https://github.com/yourusername/ci4-shield-tailwinds/issues)

## Changelog

### v0.2.8

- ✅ Removed Vue.js dependency
- ✅ Configured Vite with Tailwind CSS
- ✅ Added PWA support with service worker
- ✅ Implemented View Cells for reusable components
- ✅ Added development tools (PHPStan, PHP CS Fixer)
- ✅ Enhanced theme system

---

### Built with ❤️ using CodeIgniter 4, Shield, Tailwind CSS, and Vite
