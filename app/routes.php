<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'UserController@index');

//AJAX
Route::group(array('prefix' => 'ajax'), function()
{
	//Usuarios
	Route::post('login', 'UserController@login');
	Route::get('logout', 'UserController@logout');
	Route::post('add-user', 'UserController@store');
	Route::get('edit-user/{id}', 'UserController@show');
	Route::post('update-user/{id}', 'UserController@update');
	Route::get('delete-user/{id}', 'UserController@delete');
});