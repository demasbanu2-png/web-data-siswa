<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->setAutoRoute(true);

// Halaman Utama: Data Siswa
$routes->get('/', 'Home::index');

// Fitur CRUD Data Siswa
$routes->match(['get', 'post'], 'home/tambah', 'Home::tambah');
$routes->get('home/hapus/(:segment)', 'Home::hapus/$1');
$routes->match(['get', 'post'], 'home/edit/(:segment)', 'Home::edit/$1');
