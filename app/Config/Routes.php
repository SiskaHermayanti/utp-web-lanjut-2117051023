<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;
use App\Controllers\UserController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/user/profile/(:any)/(:any)/', 'UserController::profile/$1/$2');

$routes->get('/user/profile', [UserController::class,'profile']);
$routes->get('/user/create', [UserController::class,'create']);
$routes->post('/user/store', [UserController::class, 'store']);

//list user
$routes->get('/user', [UserController::class, 'index']);

//edit
$routes->get('user/(:any)/edit', [UserController::class, 'edit']);

//update
$routes->put('user/(:any)', [UserController::class, 'update']);

//delete
$routes->delete('user/(:any)', [UserController::class, 'destroy']);

//menampilkan detail
$routes->get('user/(:any)', [UserController::class, 'show']);

// kelas
$routes->get('/kelas/create', 'KelasController::create');
$routes->post('/kelas/store', 'KelasController::store');
$routes->get('/kelas', 'KelasController::index');
$routes->get('kelas/(:any)/edit', 'KelasController::edit/$1');
$routes->put('kelas/(:any)', 'KelasController::update/$1');
$routes->delete('kelas/(:any)', 'KelasController::destroy/$1');

$routes->get('kelas/(:any)', [KelasController::class, 'show']);
