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

Route::get('/clientes', 'ClienteController@lista');
    //return view('welcome');

Route::get('/clientes/pesquisa', 'ClienteController@clientePesquisa');

Route::get('/clientes/detalhes/{id}', 'ClienteController@detalhes')
      ->where('id', '[0-9]+');

Route::get('/clientes/novo', 'ClienteController@novo');

Route::post('/clientes/adiciona','ClienteController@adiciona');

Route::get('/simulador', )
