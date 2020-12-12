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
    return $router->app->version();
});

$router->get('foo', function () {
    return 'Hello foo';
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('tests',  ['uses' => 'SlfTstController@showAllTests']);
  
    $router->get('tests/{id}', ['uses' => 'SlfTstController@showOneAuthor']);
  
    $router->post('tests', ['uses' => 'SlfTstController@create']);
  
    $router->delete('tests/{id}', ['uses' => 'SlfTstController@delete']);
  
    $router->put('tests/{id}', ['uses' => 'SlfTstController@update']);
  });