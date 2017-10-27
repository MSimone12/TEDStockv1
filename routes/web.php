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

Route::get('/',['as'=>'index','uses'=>'ImagensController@index']);
Route::get('/adicionar',['as'=>'adicionar','uses'=>'ImagensController@adicionar']);
Route::post('/salvar',['as'=>'salvar','uses'=>'ImagensController@salvar']);
Route::get('/editar/{id}',['as'=>'editar','uses'=>'ImagensController@editar']);
Route::put('/atualizar/{id}',['as'=>'atualizar','uses'=>'ImagensController@atualizar']);
Route::get('/deletar/{id}',['as'=>'deletar','uses'=>'ImagensController@deletar']);
Route::get('/download/{id}',['as'=>'download','uses'=>'ImagensController@download']);
Route::get('/download/{id}/{tipo}',['as'=>'downloadTipo','uses'=>'ImagensController@downloadTipo']);

Route::get('/login',['as'=>'login','uses'=>'ImagensController@login']);
Route::get('/login/registrar',['as'=>'login.registrar','uses'=>'ImagensController@registrar']);
