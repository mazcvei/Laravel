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
Route::get('/newpost', 'ConctactController@index')->name('newPost');
Route::get('/formulario_titulo', 'BlogController@show')->name('formulario_titulos');

Route::get('/contacto', 'ConctactController@index')->name('contacto');

Route::resource('/show_all', 'PostController');
Route::post('/sendForm', 'PostController@store')->name('sendPost');
Route::get('/showpost{id}', 'PostController@show')->name('showPost');
Route::get('/deletePost{id}','PostController@destroy')->name('deletePost');
Route::get('/editPost{id}','PostController@edit')->name('editPost');
Route::post('/updatepost{id}','PostController@update')->name('updatePost');