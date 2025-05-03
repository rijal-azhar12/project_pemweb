<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Beranda::index');
$routes->get('beranda', 'Beranda::index');
$routes->get('about', 'about::index');
$routes->get('layanan', 'Layanan::index');
$routes->get('kontak', 'kontak::index');
