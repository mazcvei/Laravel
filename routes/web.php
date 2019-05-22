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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/formulario', 'ConctactController@index')->name('formulario');
Route::get('/formulario_titulo', 'BlogController@show')->name('formulario_titulos');

Route::get('/show_all', 'BlogController@index')->name('show_all');
Route::get('/contacto', 'ConctactController@index')->name('contacto');

Route::post('/sendForm', 'BlogController@get')->name('sendForm');
