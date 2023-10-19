<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('/profile', 'Home::profile');
// $routes->get('/profile/(:any)/(:any)/(:any)', 'Home::profile');
// $routes->get('/user/profile', [UserController::class, 'profile']);
$routes->get('user/profile', 'UserController::profile');
// $routes->get('/user/create', [UserController::class, 'create']);
$routes->get('/user/create', 'UserController::create');
// $routes->post('/user/store', [UserController::class, 'store']);
$routes->post('/user/store', 'UserController::store');

$routes->get('/user', 'UserController::index');
