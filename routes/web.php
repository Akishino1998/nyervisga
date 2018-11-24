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
Route::get('/biodata','BiodataController@index');

Route::get('/lokasi-anda','MapsController@index');
=======
<<<<<<< HEAD
Route::get('/elektronik','ElektronikController@index');
=======
Route::get('/biodata','BiodataController@index');
>>>>>>> aec800f0221c53bd5ba29441e9f52c5cea6447f4
>>>>>>> 19cc2456a92c75db0ee64bfd96a6a4f9176d83d8
