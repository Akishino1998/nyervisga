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

Route::get('/order','HomeController@order');

Route::get('/alamat_ambil','HomeController@alamat_ambil');

Route::get('/login','HomeController@login');

Route::get('/login','HomeController@register');

Route::get('/register','HomeController@lupa_password');