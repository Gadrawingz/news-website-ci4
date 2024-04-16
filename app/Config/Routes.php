<?php

use CodeIgniter\Router\RouteCollection;

// Imported controllers
use App\Controllers\Pages;
use App\Controllers\News;
use App\Controllers\Amakuru;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// News Routes
$routes->get('news', [News::class, 'index']);
$routes->get('news/(:segment)', [News::class, 'show']);

// My Defined routes for news app:
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);

// Miscellaneous