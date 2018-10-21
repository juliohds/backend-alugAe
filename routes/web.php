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
Route::get('/user', 'UserController@showAll');
Route::get('/user/{id}', 'UserController@showById');
Route::post('/user', 'UserController@create');
Route::put('/user/{id}', 'UserController@update');
Route::delete('/user/{id}', 'UserController@delete');

//Imovels
Route::get('/imovel', 'ImovelsController@showAll');
Route::get('/imovel/{id}', 'ImovelsController@showById');
Route::post('/imovel', 'ImovelsController@create');
Route::put('/imovel/{id}', 'ImovelsController@update');
Route::delete('/imovel/{id}', 'ImovelsController@delete');

//Endereco
Route::get('/endereco', 'EnderecoController@showAll');
Route::get('/endereco/{id}', 'EnderecoController@showById');
Route::post('/endereco', 'EnderecoController@create');
Route::put('/endereco/{id}', 'EnderecoController@update');
Route::delete('/endereco/{id}', 'EnderecoController@delete');

//Chat
Route::get('/chat', 'EnderecoController@showAll');
Route::get('/chat/{id}', 'EnderecoController@showById');
Route::post('/chat', 'EnderecoController@create');
Route::put('/chat/{id}', 'EnderecoController@update');
Route::delete('/chat/{id}', 'EnderecoController@delete');

//Locacoes
Route::get('/locacoes', 'EnderecoController@showAll');
Route::get('/locacoes/{id}', 'EnderecoController@showById');
Route::post('/locacoes', 'EnderecoController@create');
Route::put('/locacoes/{id}', 'EnderecoController@update');
Route::delete('/locacoes/{id}', 'EnderecoController@delete');

//Perfil
Route::get('/perfil', 'EnderecoController@showAll');
Route::get('/perfil/{id}', 'EnderecoController@showById');
Route::post('/perfil', 'EnderecoController@create');
Route::put('/perfil/{id}', 'EnderecoController@update');
Route::delete('/perfil/{id}', 'EnderecoController@delete');