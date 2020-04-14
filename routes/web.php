<?php

use Illuminate\Support\Facades\Route;

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

//------------------------------Usuario 
//Inicio
Route::get('/home', 'HomeController@index')->name('home');
//Registro
Route::get('/home/user/image/{filename}', 'UsuarioController@getImage')->name('usuario.imagen');

//------------------------------Administrador
//Publicidad
Route::get('/home/advertising', 'PublicidadController@index')->name('admin.publicidad');
//Sugerencias/Comentarios
Route::get('/home/suggestions-comments', 'ComentarioController@index')->name('admin.sug-com');
