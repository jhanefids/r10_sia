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

// Unsecure routes
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/users', 'UserController@getUsers');
});

// More simple routes
$router->get('/users', 'UserController@index'); // Get all user records
$router->post('/users', 'UserController@add'); // Create new user record
$router->get('/users/{id}', 'UserController@show'); // Get user by id
$router->put('/users/{id}', 'UserController@update'); // Update user record
$router->patch('/users/{id}', 'UserController@update'); // Update user record
$router->delete('/users/{id}', 'UserController@delete'); // Delete user record
