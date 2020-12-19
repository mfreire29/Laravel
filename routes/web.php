<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/consultas', 'ConsultasController@index');
$router->get('/productos', 'ProductosController@index');
$router->get('/productos/{id}', 'ProductosController@getProducto');
$router->post('/productos', 'ProductosController@createProducto');
$router->post('/productos/{id}', 'ProductosController@updateProducto');
$router->delete('/productos/{id}', 'ProductosController@destroyProducto');

$router->get('/fcm', 'Controller@index');
