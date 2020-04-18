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

Route::get('/', function ()
{
    return view('welcome');
});
/*
Route::get('Evento', function () {
    return view('Usuario.event');
});
*/

Auth::routes();
Route::resource('evento','EventoController');
Route::resource('registro','RegistroController');


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

//Materiales
Route::get('/home/materials/{buscar?}', 'CatalogoMaterialController@index')->name('admin.materiales');
Route::get('/home/material/create', 'CatalogoMaterialController@create')->name('admin.crear-material');
Route::get('/home/material/modify/{id}', 'CatalogoMaterialController@edit')->name('admin.modificar-material');
Route::post('/home/material/create/save', 'CatalogoMaterialController@store')->name('admin.guardar-material');
Route::post('/home/material/modify/save/{id}', 'CatalogoMaterialController@update')->name('admin.actualizar-material');
Route::get('/home/material/image/{filename}', 'CatalogoMaterialController@getImage')->name('admin.material-imagen');
Route::get('/home/material/delete/{id}', 'CatalogoMaterialController@destroy')->name('admin.eliminar-material');

//Herramientas
Route::get('/home/tools/{buscar?}', 'CatalogoHerramientaController@index')->name('admin.herramientas');
Route::get('/home/tool/create', 'CatalogoHerramientaController@create')->name('admin.crear-herramienta');
Route::get('/home/tool/modify/{id}', 'CatalogoHerramientaController@edit')->name('admin.modificar-herramienta');
Route::post('/home/tool/create/save', 'CatalogoHerramientaController@store')->name('admin.guardar-herramienta');
Route::post('/home/tool/modify/save/{id}', 'CatalogoHerramientaController@update')->name('admin.actualizar-herramienta');
Route::get('/home/tool/image/{filename}', 'CatalogoHerramientaController@getImage')->name('admin.herramienta-imagen');
Route::get('/home/tool/delete/{id}', 'CatalogoHerramientaController@destroy')->name('admin.eliminar-herramienta');

//Entornos
Route::get('/home/environments/{buscar?}', 'CatalogoEntornoController@index')->name('admin.entornos');
Route::get('/home/environment/create', 'CatalogoEntornoController@create')->name('admin.crear-entorno');
Route::post('/home/environment/create/save', 'CatalogoEntornoController@store')->name('admin.guardar-entorno');
Route::get('/home/environment/delete/{id}', 'CatalogoEntornoController@destroy')->name('admin.eliminar-entorno');
Route::get('/home/environment/modify/{id}', 'CatalogoEntornoController@edit')->name('admin.modificar-entorno');
Route::post('/home/environment/modify/save/{id}', 'CatalogoEntornoController@update')->name('admin.actualizar-entorno');

//Asesores
Route::get('/home/classification-advisers/{buscar?}', 'CatalogoAsesorController@index')->name('admin.asesores');
Route::get('/home/classification-adviser/create', 'CatalogoAsesorController@create')->name('admin.crear-asesor');
Route::post('/home/classification-adviser/create/save', 'CatalogoAsesorController@store')->name('admin.guardar-asesor');
Route::get('/home/classification-adviser/delete/{id}', 'CatalogoAsesorController@destroy')->name('admin.eliminar-asesor');
Route::get('/home/classification-adviser/modify/{id}', 'CatalogoAsesorController@edit')->name('admin.modificar-asesor');
Route::post('/home/classification-adviser/modify/save/{id}', 'CatalogoAsesorController@update')->name('admin.actualizar-asesor');

//Servicios
Route::get('/home/classification-services/{buscar?}', 'CatalogoServicioController@index')->name('admin.servicios');
Route::get('/home/classification-service/create', 'CatalogoServicioController@create')->name('admin.crear-servicio');
Route::post('/home/classification-service/create/save', 'CatalogoServicioController@store')->name('admin.guardar-servicio');
Route::get('/home/classification-service/modify/{id}', 'CatalogoServicioController@edit')->name('admin.modificar-servicio');
Route::post('/home/classification-service/modify/save/{id}', 'CatalogoServicioController@update')->name('admin.actualizar-servicio');
Route::get('/home/classification-services/delete/{id}', 'CatalogoServicioController@destroy')->name('admin.eliminar-servicio');

//Productos
Route::get('/home/classification-products/{buscar?}', 'CatalogoProductoController@index')->name('admin.productos');
Route::get('/home/classification-product/create', 'CatalogoProductoController@create')->name('admin.crear-producto');
Route::post('/home/classification-product/create/save', 'CatalogoProductoController@store')->name('admin.guardar-producto');
Route::get('/home/classification-product/delete/{id}', 'CatalogoProductoController@destroy')->name('admin.eliminar-producto');
Route::get('/home/classification-product/modify/{id}', 'CatalogoProductoController@edit')->name('admin.modificar-producto');
Route::post('/home/classification-product/modify/save/{id}', 'CatalogoProductoController@update')->name('admin.actualizar-producto');
