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

/** routes for index */
$app->get('/', function () use ($app) {
  return $app->version();
});

/** routes for apilumen */
$app->group(['prefix' => 'api'], function () use ($app) {
  $app->get('apilumen', 'apiLumenController@showAll');
  $app->get('apilumen/{id}', 'apiLumenController@showOne');
  $app->post('apilumen', 'apiLumenController@createOne');
  $app->put('apilumen/{id}', 'apiLumenController@updateOne');
  $app->delete('apilumen/{id}', 'apiLumenController@deleteOne');
});

/** routes for authors */
$app->group(['prefix' => 'v2'], function () use ($app) {
  $app->get('authors', ['uses' => 'AuthorController@showAll']);
  $app->get('authors/{id}', ['uses' => 'AuthorController@showOne']);
  $app->post('authors', ['uses' => 'AuthorController@createOne']);
  $app->delete('authors/{id}', ['uses' => 'AuthorController@deleteOne']);
  $app->put('authors/{id}', ['uses' => 'AuthorController@updateOne']);
});
