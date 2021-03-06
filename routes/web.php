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

Route::get('/' , 'PostsController@show');

Route::middleware(['auth'])->group(function () {
	Route::get('/home', 'PostsController@index')->name('home');

	Route::get('/create', 'PostsController@create')->name('create');

	Route::post('/store', 'PostsController@store')->name('store');

	Route::get('/users' , 'UsersController@index')->name('users');
});