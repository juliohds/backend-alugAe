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

Route::get('/', function () { return view('welcome'); });

//CRUD USER
Route::post('/user', 'userController@create');
Route::get('/user/{id}', 'userController@show');
Route::put('/user/{id}', 'userController@update');
Route::delete('/user/{id}', 'userController@delete');

