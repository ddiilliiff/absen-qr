<?php

// use CodeIgniter\Router\RouteCollection;

/*
 * @var RouteCollection $routes
 */

// $routes->get('/', 'Auth::index');
// $routes->post('/login', 'Auth::login');

// Admin
// $routes->group('admin', function ($routes) {
//     $routes->get('/', 'DataDosen::index');
// });

// Dosen
// $routes->group('dosen', ['filter' => 'auth'], function ($routes) {
//     $routes->get('', 'Dosen::index');
// });

// Mahasiswa
// $routes->group('mahasiswa', ['filter' => 'auth'], function ($routes) {
//     $routes->get('', 'Mahasiswa::index');
// });

// Damar

namespace Config;

$routes = Services::routes();

if (is_file(SYSTEMPATH.'Config/Routes.php')) {
    require SYSTEMPATH.'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

$routes->setAutoRoute(true);

$routes->get('/', 'Auth::index');

// app/Config/Routes.php

$routes->group('api', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('get-mata-kuliah-info/(:segment)', 'Api::getMataKuliahInfo/$1');
});

// $routes->group('Auth', ['filter' => 'auth'], function ($routes) {
//     $routes->post('/auth', 'Auth::auth');
// });

// $routes->group('admin', ['filter' => 'auth'], function ($routes) {
//     $routes->get('/', '');
// });

if (is_file(APPPATH.'Config/'.ENVIRONMENT.'/Routes.php')) {
    require APPPATH.'Config/'.ENVIRONMENT.'/Routes.php';
}
