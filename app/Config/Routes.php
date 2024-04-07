<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('addEmployee', 'Home::addEmployee');
$routes->post('employee-store', 'Home::store');
$routes->get('update/(:num)', 'Home::update/$1');
$routes->post('updatesubmit/(:num)', 'Home::updatedata/$1');
$routes->get('delete/(:num)', 'Home::delete/$1');