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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('usuarios', 'UsuariosController');

//esta ruta es para listar paises pero no me los comparte con la vista de libro.create
Route::get('libro', 'LibroController@listarPaises');

Route::resource('libro', 'LibroController');

Route::resource('autor', 'AutorController');

Route::resource('contactos', 'ContactoController');