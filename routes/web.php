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

Route::get('/','HomeController@index');

Route::get('/order','OrderController@order');

Route::get('/alamat_ambil','AlamatAmbilController@alamat_ambil');

Route::get('/login','LoginController@login');

Route::get('/register','RegisterController@register');

Route::get('/lupa_password','LupaPasswordController@lupa_password');

<<<<<<< HEAD
Route::get('/elektronik','ElektronikController@index');
=======

Route::get('/biodata','BiodataController@index');

Route::get('/lokasi-anda','MapsController@index');

Route::get('/elektronik','ElektronikController@index');

>>>>>>> 9a96635ec8d0c5dcd3ad0123866597748cafa74b
Route::get('/biodata','BiodataController@index');
