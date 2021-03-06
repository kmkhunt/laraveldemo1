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

Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('/users')->group(function () {
	Route::get('/list', 'UserController@index')->name('ViewUser');
	Route::get('/users-json', 'UserController@indexJson')->name('ViewUserJson');

	Route::get('/yajralist', 'YajraDataController@yajralist');
	Route::get('/index', 'YajraDataController@index');
});
