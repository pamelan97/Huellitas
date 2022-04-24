<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}



$routes->add('registro', 'registroCrud::agregar01Formulario');
$routes->add('login', 'LoginLogOutController::login01Formulario');
$routes->add('login-login01Validar/', 'LoginLogOutController::login02Validar/');
$routes->add('login-logout', 'LoginLogOutController::logout');
$routes->add('registromascota', 'registroMascotaCrud::agregar01Mascota');

// Ejemplo base

$routes->get('base-index', 'NavegarBaseController::index');
$routes->get('base-ver', 'NavegarBaseController::ver');
$routes->get('base-editar', 'NavegarBaseController::editar01Formulario');
$routes->get('base-editar-continuar', 'NavegarBaseController::editar02Continuar');
$routes->get('base-eliminar', 'NavegarBaseController::eliminar');
$routes->post('base-elimnar-continuar', 'NavegarBaseController::eliminar02Continuar');

// CRUD
//
//
$routes->get('login-index', 'registroMascotaCrud::index');
//
$routes->get('registromascota-ver/(:num)', 'registroMascotaCrud::ver/$1');
//
$routes->get('registromascota-agregar', 'registroMascotaCrud::agregar01Formulario');
$routes->post('registromascota-agregar-continuar', 'registroMascotaCrud::agregar02Continuar');
//
$routes->add('registromascota-editar/(:num)', 'registroMascotaCrud::editar01Formulario/$1');
$routes->post('registromascota-editar-continuar', 'registroMascotaCrud::editar02Continuar');
//
$routes->get('registromascota-eliminar/(:num)', 'registroMascotaCrud::eliminar01Formulario/$1');
$routes->post('registromascota-elimnar-continuar', 'registroMascotaCrud::eliminar02Continuar');
//
$routes->add('registromascota-cancelar', 'registroMascotaCrud::cancelar');
//
