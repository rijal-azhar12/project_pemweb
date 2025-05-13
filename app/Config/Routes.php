<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Beranda::index');
$routes->get('beranda', 'Beranda::index');
$routes->get('about', 'about::index');
$routes->get('galeri', 'galeri::index');
$routes->get('layanan', 'Layanan::index');
$routes->get('/kontak', 'Kontak::index');
$routes->post('/kontak/send', 'Kontak::sendMessage');
$routes->get('/kontak/edit/(:num)', 'Kontak::edit/$1');
$routes->post('/kontak/update/(:num)', 'Kontak::update/$1');
$routes->get('/kontak/delete/(:num)', 'Kontak::delete/$1');
