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

/* 
* default routes    
*/
$app->get('/', function () use ($app) {
  return $app->version();
});

/** routes yang dipakai untuk API's */
$app->get('/apilumen', 'apiLumenController@index');
$app->get('/apilumen/{id}', 'apiLumenController@show');
$app->post('/apilumen', 'apiLumenController@store');
$app->put('/apilumen/{id}', 'apiLumenController@update');
$app->delete('/apilumen/{id}', 'apiLumenController@destroy');
