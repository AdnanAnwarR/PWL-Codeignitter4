<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index', ['filter' => 'auth']);
$routes->get('/main', 'Main::index');
$routes->get('/main/(:any)', 'Main::index/$1');
$routes->get('/keranjang', 'TransaksiController::index', ['filter' => 'auth']);
$routes->get('/produk', 'ProdukController::index', ['filter' => 'auth']);


$routes->get('/produks', 'Home::produk');
// $routes->get('/login', 'Login::index');
// $routes->post('/login/auth', 'Login::auth');
// $routes->post('/logout', 'Login::logout');

$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');


