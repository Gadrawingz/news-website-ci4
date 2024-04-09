<?php

use CodeIgniter\Router\RouteCollection;

// Imported controllers
use App\Controllers\Pages;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


// My Defined routes for news app:
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);