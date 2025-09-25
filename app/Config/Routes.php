<?php

declare(strict_types=1);

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

$routes->group('admin', function ($routes) {
    $routes->get('dashboard', 'Admin\DashboardController::index', ['as' => 'admin.dashboard']);
    // Add more admin routes here
});

