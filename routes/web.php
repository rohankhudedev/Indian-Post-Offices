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

$router->get('/version', function () use ($router) {
    return $router->app->version();
});

$router->get('post-offices/ajax',  ['uses' => 'PostOfficeController@index']);

$router->get('post-offices/simple',  ['uses' => 'PostOfficeController@get']);

$router->group(['namespace' => 'Api', 'prefix' => 'api'], function () use ($router) {
    $router->get('post-offices',  ['uses' => 'PostOfficeController@index']);
});
