<?php

declare(strict_types=1);

use App\Controllers\Admin\DashboardController;
use App\Controllers\Admin\Settings\SettingsController;
use App\Controllers\HelpController;
use App\Controllers\HomeController;
use App\Controllers\LegalController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [HomeController::class, 'index'], ['as' => 'home']);
$routes->get('about-us', [HomeController::class, 'about'], ['as' => 'about.us']);
$routes->get('contact', [HomeController::class, 'contact'], ['as' => 'contact.us']);
$routes->get('services', [HomeController::class, 'services'], ['as' => 'services']);
$routes->get('landing-page', [HomeController::class, 'lp'], ['as' => 'landing.page']);
// Legal Stuff
$routes->get('terms-of-service', [LegalController::class, 'terms'], ['as' => 'terms']);
$routes->get('privacy-policy', [LegalController::class, 'privacy'], ['as' => 'privacy']);
// Help section
$routes->match(['get', 'post'], 'help', [HelpController::class, 'index'], ['as' => 'pages']);
$routes->match(['get', 'post'], 'help/(:any)', [HelpController::class, 'show/$1'], ['as' => 'page']);

service('auth')->routes($routes);

// Super admin only routes
$routes->group('admin/super', ['filter' => ['session', 'group:superadmin']], function ($routes): void {
    $routes->get('system-settings', [SettingsController::class, 'systemSettings']);
});

// Admin and super admin routes
$routes->group('admin', ['filter' => ['session', 'group:superadmin,admin']], function ($routes): void {
    $routes->get('/', [DashboardController::class, 'index'], ['as' => 'admin.dashboard']);
    $routes->get('settings', [SettingsController::class, 'index'], ['as' => 'admin.settings']);
    // Add more admin routes here
});
