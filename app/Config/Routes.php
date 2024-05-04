<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/aboutme', 'Home::about_me');
$routes->get('/education', 'Home::education');
