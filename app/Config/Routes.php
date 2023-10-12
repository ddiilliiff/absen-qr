<?php

use CodeIgniter\Router\RouteCollection;

/*
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');
$routes->post('/login', 'Auth::login');

// Admin
$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    $routes->get('', 'Admin::index');
});

// Dosen
$routes->group('dosen', ['filter' => 'auth'], function ($routes) {
    $routes->get('', 'Dosen::index');
});

// Mahasiswa
$routes->group('mahasiswa', ['filter' => 'auth'], function ($routes) {
    $routes->get('', 'Mahasiswa::index');
});
