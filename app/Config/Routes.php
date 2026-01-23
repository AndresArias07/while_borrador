<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


//MENSAJES
$routes->get('/mensajes', 'MensajesController::index');

//HISTORIA
$routes->get('/historia', 'HistoriaController::index');