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
Route::get('/','DashboardController@index');

Route::get('/login', 'LoginController@index');

Route::get('/login/create', 'LoginController@create');

Route::post('/login/store', 'LoginController@store');

Route::post('/login/cek', 'LoginController@cek');

Route::get('/logout', 'LoginController@logout');

Route::resource('/kontak','KontakController');

Route::resource('/paket','PaketController');

Route::resource('/donor','DonorController');

Route::resource('/kantong-darah','KantongDarahController');

Route::resource('/pendonor','PendonorController');

Route::resource('/peramalan','PeramalanController');

Route::resource('/permintaan','PermintaanController');

Route::get('/landing','DashboardController@index');

