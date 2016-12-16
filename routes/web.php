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

//Route::get('/', 'Noticias@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

// Noticias - 1º Tuto
Route::resource('/noticias', 'Noticias');

Route::resource('movie', 'MovieController');

Route::get('pruebas', function(){ return "hola";});

Auth::routes();

Route::get('/home', 'HomeController@index');

//2º Tuto
Route::get('/', 'FrontController@index');
Route::get('cinema', 'FrontController@index');
Route::get('contacto', 'FrontController@contacto');
Route::get('reviews', 'FrontController@reviews');
Route::get('admin', 'FrontController@admin');

Route::resource('user','UserController');
    
// URL dinamica StoreZones
Route::get('/{user_uri}', function($value){ 
    
    $user = \MyApLaravel\User::where('name', $value)->first();
    if($user)
        return view('layouts/profile')->with(["user" => $user]);
    else
        return view ('errors/503');
    
});