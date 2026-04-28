<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->get('/main', 'Main::index');
$routes->get('/main/(:any)', 'Main::index/$1');
$routes->get('/keranjang', 'TransaksiController::index');
$routes->get('/produk', 'ProdukController::index');


$routes->get('/produks', 'Home::produk');
$routes->get('/login', 'Login::index');
$routes->post('/login/auth', 'Login::auth');
$routes->post('/logout', 'Login::logout');


