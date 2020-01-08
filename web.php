<?php

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
    return 'Servicio API RESTPUL LUMEN...is running..';
});
$router->group(['prefix'=>'api'],function () use ($router){
    $router->get('usuario','Usuariocontrol@index');
    $router->get('usuario/{id}','Usuariocontrol@show');
    $router->post('usuario','Usuariocontrol@store');
    $router->put('usuario/{id}','Usuariocontrol@update');
    $router->delete('usuario/{id}','Usuariocontrol@destroy');
});
