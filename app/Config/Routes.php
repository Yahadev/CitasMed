<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/nosotros', 'Home::inicio');

/** VISTA LOGIN*/
$routes->get('inicio/login', 'Home::ver');
$routes->post('inicio/login', 'Home::login');
/** VISTA REGISTRO USUARIO*/
$routes->get('/registrar', 'Home::registrar');
/** GUARDAR REGISTRO USUARIO*/
$routes->post('/guardar', 'Home::guardar');
$routes->get('/cerrar-sesion', 'Home::cerrarSesion');

$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    // Rutas del panel de administrador
    $routes->get('dashboard', 'Administrador\DashboardController::dashboard');
    $routes->get('citas', 'Administrador\citas\Ver::Citas');
    $routes->get('citas/agregar', 'Administrador\citas\Agregar::index');
    $routes->post('citas/agregar/guardar', 'Administrador\citas\Agregar::guardar');
    $routes->get('citas/editar/(:num)', 'Administrador\citas\Editar::index/$1');
    $routes->post('citas/editar/guardar/(:num)', 'Administrador\citas\Editar::guardar/$1');
    $routes->get('citas/eliminar/(:num)', 'Administrador\Citas\Ver::eliminar/$1');

    $routes->get('medicos', 'Administrador\medicos\Ver::Medicos');
    $routes->get('medicos/agregar', 'Administrador\medicos\Agregar::index');
    $routes->post('medicos/agregar/guardar', 'Administrador\medicos\Agregar::guardar');
    $routes->get('medicos/editar/(:num)', 'Administrador\medicos\Editar::index/$1');
    $routes->post('medicos/editar/guardar/(:num)', 'Administrador\medicos\Editar::guardar/$1');
    $routes->get('medicos/eliminar/(:num)', 'Administrador\medicos\Ver::eliminar/$1');

    $routes->get('especialidades', 'Administrador\especialidades\Ver::Especialidades');
    $routes->get('especialidades/agregar', 'Administrador\especialidades\Agregar::index');
    $routes->post('especialidades/agregar/guardar', 'Administrador\especialidades\Agregar::guardar');
    $routes->get('especialidades/editar/(:num)', 'Administrador\especialidades\Editar::index/$1');
    $routes->post('especialidades/editar/guardar/(:num)', 'Administrador\especialidades\Editar::guardar/$1');
    $routes->get('especialidades/eliminar/(:num)', 'Administrador\especialidades\Ver::eliminar/$1');

    $routes->get('pacientes', 'Administrador\pacientes\Ver::Pacientes');
    $routes->get('pacientes/agregar', 'Administrador\pacientes\Agregar::index');
    $routes->post('pacientes/agregar/guardar', 'Administrador\pacientes\Agregar::guardar');
    $routes->get('pacientes/editar/(:num)', 'Administrador\pacientes\Editar::index/$1');
    $routes->post('pacientes/editar/guardar/(:num)', 'Administrador\pacientes\Editar::guardar/$1');
    $routes->get('pacientes/eliminar/(:num)', 'Administrador\pacientes\Ver::eliminar/$1');
});

$routes->group('paciente', ['filter' => 'auth'], function ($routes) {
    // Rutas del panel de paciente
    $routes->get('dashboard', 'Paciente\DashboardController::dashboard');
    $routes->get('pacientes', 'Paciente\pacientes\Ver::Pacientes');
    $routes->get('pacientes/editar/(:num)', 'Paciente\pacientes\Editar::index/$1');
    $routes->post('pacientes/editar/guardar/(:num)', 'Paciente\pacientes\Editar::guardar/$1');
    $routes->get('citas', 'Paciente\citas\Ver::Citas');
    $routes->post('citas/agregar/guardar', 'Paciente\citas\Agregar::guardar');
    $routes->get('citas/editar/(:num)', 'Paciente\citas\Editar::index/$1');
    $routes->post('citas/editar/guardar/(:num)', 'Paciente\citas\Editar::guardar/$1');
});

$routes->group('medico', ['filter' => 'auth'], function ($routes) {
    // Rutas del panel de médico
    $routes->get('dashboard', 'Medico\DashboardController::dashboard');
    $routes->get('citas', 'Medico\citas\Ver::Citas');
    $routes->get('citas/editar/(:num)', 'Medico\citas\Editar::index/$1');
    $routes->post('citas/editar/guardar/(:num)', 'Medico\citas\Editar::guardar/$1');
    $routes->get('medicos', 'Medico\medicos\Ver::Medicos');
    $routes->get('medicos/editar/(:num)', 'Medico\medicos\Editar::index/$1');
    $routes->post('medicos/editar/guardar/(:num)', 'Medico\medicos\Editar::guardar/$1');
});
