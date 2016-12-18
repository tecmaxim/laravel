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
Route::resource('scaffold_table','Scaffold_tableController'); 

Route::get('/{user_uri}', function($value){ 
    
    $user = \MyApLaravel\User::where('name', $value)->first();
    if($user)
        return view('layouts/profile')->with(["user" => $user]);
    else
        return view ('errors/503');
    
});
//scaffold_table Routes
/*
Route::group(['middleware'=> 'web'],function(){
  Route::resource('scaffold_table','Scaffold_tableController');
  Route::post('scaffold_table/{id}/update','Scaffold_tableController@update');
  Route::get('scaffold_table/{id}/delete','Scaffold_tableController@destroy');
  Route::get('scaffold_table/{id}/deleteMsg','Scaffold_tableController@DeleteMsg');
});
*/