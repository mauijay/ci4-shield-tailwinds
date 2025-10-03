# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [0.3.6] - 2025-10-03

### Added

- Version synchronization system across package.json, composer.json, and .env files
- Comprehensive documentation for version management workflow
- Enhanced README with step-by-step instructions for conventional commits

### Fixed

- npm changelog generation workflow
- Git working directory requirements for version bumping

## [0.3.5] - 2025-10-03

### Added

- Complete CI/CD pipeline with GitHub Actions
- Comprehensive test suite with Unit, Database, Session, and Feature tests
- Layout testing for Tailwind CSS components
- Code quality tools (PHP CS Fixer, PHPStan)
- Test coverage reporting infrastructure
- Automated code style fixing and validation

### Fixed

- PHPUnit configuration for CI environments
- Composer SSL/TLS security settings
- Code style compliance across all test files
- Feature test robustness with regex pattern matching
- Layout test case sensitivity issues

### Changed

- Updated composer.json with complete testing scripts
- Improved phpunit.xml.dist for better CI compatibility
- Enhanced package.json with npm test script bridges
- Standardized test file formatting and structure

### Security

- Enabled SSL/TLS protection in Composer configuration
- Removed insecure HTTP fallbacks

## [0.3.4] - 2025-10-02

### Added

- Initial project setup with CodeIgniter 4, Shield Auth, and Tailwind CSS
- Basic project structure and configuration

## [0.2.7] - 2025-09-29

### Added

- Conventional changelog support
- View cell implementation on service page
- Alpine.js to Vue.js migration packages

### Fixed

- Button element changed from href to proper `<a>` tag
- README and composer scripts configuration

[0.3.6]: https://github.com/mauijay/ci4-shield-tailwinds/compare/v0.3.5...v0.3.6
[0.3.5]: https://github.com/mauijay/ci4-shield-tailwinds/compare/v0.3.4...v0.3.5
[0.3.4]: https://github.com/mauijay/ci4-shield-tailwinds/compare/v0.2.7...v0.3.4
[0.2.7]: https://github.com/mauijay/ci4-shield-tailwinds/releases/tag/v0.2.7
