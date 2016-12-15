<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'Noticias@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

// Noticias
Route::resource('/noticias', 'Noticias');

Route::resource('movie', 'MovieController');

Route::get('pruebas', function(){ return "hola";});

Auth::routes();

Route::get('/home', 'HomeController@index');

//New Tuto
Route::get('cinema', 'FrontController@index');
Route::get('contacto', 'FrontController@contacto');
Route::get('reviews', 'FrontController@reviews');
