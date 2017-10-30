<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::group(['middleware'=>'auth'], function(){


Route::get('/adicionar',['as'=>'adicionar','uses'=>'ImagensController@adicionar'])->middleware('auth');
Route::post('/salvar',['as'=>'salvar','uses'=>'ImagensController@salvar'])->middleware('auth');
Route::get('/editar/{id}',['as'=>'editar','uses'=>'ImagensController@editar'])->middleware('auth');
Route::put('/atualizar/{id}',['as'=>'atualizar','uses'=>'ImagensController@atualizar'])->middleware('auth');
Route::get('/deletar/{id}',['as'=>'deletar','uses'=>'ImagensController@deletar'])->middleware('auth');
Route::get('/download/{id}',['as'=>'download','uses'=>'ImagensController@download'])->middleware('auth');
Route::get('/download/{id}/{tipo}',['as'=>'downloadTipo','uses'=>'ImagensController@downloadTipo'])->middleware('auth');

// });

Route::get('/',['as'=>'index','uses'=>'ImagensController@index']);
Route::get('/login',['as'=>'login.index','uses'=>'LoginController@index']);
Route::post('/login/entrar',['as'=>'login.entrar','uses'=>'LoginController@entrar']);

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
