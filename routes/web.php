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

Route::get('/', function () {
    return view('welcome');
});


Route::get('usuario/index', 'UsuarioController@index');
Route::get('usuario/login', 'UsuarioController@login');
Route::get('usuario/editar/{id}', 'UsuarioController@editar');
Route::get('usuario/todos', 'UsuarioController@todos');