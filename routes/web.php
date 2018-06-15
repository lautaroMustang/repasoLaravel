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

//--Product--//
Route::get('/productos', 'ProductsController@index');
Route::get('/productos/agregar','ProductsController@create');
Route::post('/productos/agregar', 'ProductsController@store');
Route::get('/productos/{id}', 'ProductsController@show');
Route::delete('/productos/{id}', 'ProductsController@destroy');
Route::get('/productos/{id}/edit', 'ProductsController@edit');
Route::patch('/productos/{id}','ProductsController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
