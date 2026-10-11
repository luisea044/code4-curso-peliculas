<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
//$routes->get('/', 'Home::index');

// $routes->get('bienvenida', 'Bienvenida::index');

// $routes->get('salida', 'Ejercicios::index');

// $routes->get('mensaje', 'MensajeController::index');

// $routes->get('lista-estudiantes', 'ListaController::index');

// $routes->get('saludo', 'SaludoController::index');

// $routes->get('curso/(:num)', 'CursoController::detalle/$1');

// $routes->get('buscar-ejercicio', 'BuscarController::index');

// $routes->get('registro', 'RegistroController::formulario');
// $routes->post('registro/procesar', 'RegistroController::procesar');

// $routes->get('pelicula', 'Pelicula::index');
// $routes->get('pelicula/new', 'Pelicula::create');
// $routes->get('pelicula/edit/(:num)', 'Pelicula::edit/$1');
// $routes->post('pelicula/update/(:num)', 'Pelicula::update/$1');
// $routes->post('pelicula/delete/(:num)', 'Pelicula::delete/$1');

$routes->presenter('pelicula');
