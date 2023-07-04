<?php

namespace Config;

use App\Controllers\CustomerController;
use App\Controllers\CustomersController;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'CustomersController::index');
// $routes->get('/hello', 'Hello::index');
// $routes->get('/hello3', 'Hello3::index');
// $routes->get('/tangkap1', 'Tangkap1::index');
// $routes->post('/tangkap1', 'Tangkap1::simpan');

$routes->get('/customers', 'CustomersController::index');
$routes->get('/customers/create', 'CustomersController::create');
$routes->post('/customers/store', 'CustomersController::store');


$routes->get('customers/edit/(:num)', 'CustomersController::edit/$1');
$routes->post('customers/update/(:num)', 'CustomersController::update/$1');
$routes->get('customers/delete/(:num)', 'CustomersController::delete/$1');

$routes->get('/inets', 'InetsController::index');
$routes->get('/inets/create', 'InetsController::create');
$routes->post('/inets/store', 'InetsController::store');

$routes->get('inets/edit/(:num)', 'InetsController::edit/$1');
$routes->post('inets/update/(:num)', 'InetsController::update/$1');
$routes->get('inets/delete/(:num)', 'InetsController::delete/$1');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
