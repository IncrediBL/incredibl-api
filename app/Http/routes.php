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

$app->get('/', function () use ($app) {
    return $app->version();
});


$app->get('/zones', 'ZoneController@index');
$app->post('/zones', 'ZoneController@create');
$app->get('/zones/{id}', 'ZoneController@show');
$app->delete('/zones/{id}', 'ZoneController@destroy');


$app->get('/pastes', 'PasteController@index');
$app->post('/pastes', 'PasteController@create');
$app->get('/pastes/{id}', 'PasteController@show');
$app->delete('/pastes/{id}', 'PasteController@destroy');