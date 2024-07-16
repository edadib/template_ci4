<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Dashboard;
use App\Controllers\APIController;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

$routes->get('/', 'Dashboard::index'); // cara routing single
$routes->get('Data', 'Dashboard::Data_example'); // cara routing single

$routes->group('Dashboard', static function ($routes) { // cara routing group
    $routes->get('', 'Dashboard::index');
    $routes->get('Main', [Dashboard::class, 'Main']); // jika nk guna cara ni, kena panggil controller menggunakan use App\Controllers\Dashboard; 
    $routes->get('Testing', 'Dashboard::testing');
});

$routes->group('API', static function ($routes) {
    $routes->get('Contoh', [APIController::class, 'ContohAPI']);
    $routes->post('ContohPost', [APIController::class, 'ContohAPIPost']);
});

$routes->group('Access', static function ($routes) {
    $routes->post('Login_Auth', 'UserAccess::Login_Auth');
    $routes->get('Logout', 'UserAccess::Logout');
    $routes->get('Login', 'UserAccess::Login');
    $routes->get('Profile', 'UserAccess::Profile');
});
