<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->resource('infousuarios', ['controller' => 'InfoUsuarioController']);
$routes->resource('usuarios', ['controller' => 'UsuarioController']);
$routes->resource('perfiles', ['controller' => 'PerfilController']);

