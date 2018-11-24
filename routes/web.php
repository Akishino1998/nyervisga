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

//akun
Route::get('/login','LoginController@index');
Route::post('/login','LoginController@login');

Route::get('/register','RegisterController@register');

Route::get('/lupa_password','LupaPasswordController@lupa_password');


Route::get('/elektronik','ElektronikController@index');
Route::get('/biodata','BiodataController@index');

//order
Route::get('/lokasi-anda','MapsController@index');
Route::post('/lokasi-anda','MapsController@create');
Route::get('/elektronik','ElektronikController@index');