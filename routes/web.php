<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();


Route::get('/', [
	'as' => 'domov',
	'uses' => 'HomeController@domov'
]);


Route::get('odjava', [
	'as' => 'logout',
	'uses' => 'AccountController@logout'
]);


// Dodaj

Route::get('dodaj', [
	'as' => 'dodaj',
	'uses' => 'PostController@dodajGet'
]);

Route::post('dodaj', [
	'as' => 'dodajPost',
	'uses' => 'PostController@dodajPost'
]);