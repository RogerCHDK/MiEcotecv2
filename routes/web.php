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
    //return view('welcome');
    return redirect('/home');
});

Auth::routes();

/*
  Route::get('Evento', function () {
  return view('Usuario.event');
  });
 */


Auth::routes();

Route::resource('publicidadHerramienta', 'PublicidadHerramientaController');
Route::resource('publicidadMaterial', 'PublicidadMaterialController');
Route::resource('comentarios', 'ComentarioController');
Route::resource('productos', 'ProductoController');
Route::resource('servicios', 'ServicioController');
Route::resource('pagos', 'PagoController');
Route::get('producto-imagen/{filename}', 'ProductoController@getImage')->name('usuario.producto-imagen');
Route::get('servicio-imagen/{filename}', 'ServicioController@getImage')->name('usuario.servicio-imagen');
//Route::get('/material', 'CatalogoMaterialController@publicidad')->name('usuario.material');




Route::resource('registro', 'RegistroController');

//------------------Eventos
Route::resource('evento', 'EventoController');
Route::get('evento-imagen/{filename}', 'EventoController@getImage')->name('usuario.evento-imagen');
Route::get('eventos','EventoController@eventos_N')->name('eventos.eventos');
//--------------- Registros
Route::resource('registro', 'RegistroController');

//------------ Consejo
Route::resource('consejo', 'ConsejoController');
Route::get('consejo-imagen/{filename}', 'ConsejoController@getImage')->name('usuario.consejo-imagen');

//------------- Like
Route::get('/like/{id}','LikeController@like')->name('like.like');
Route::get('/dislike/{id}','LikeController@dislike')->name('like.delete');
Route::get('prueba/{tipo}/{id}','LikeController@prueba');

//------------ Experto
Route::resource('asesor', 'AsesorController');
Route::get('asesor-imagen/{id_usuario}', 'AsesorController@getImage')->name('asesor.asesor-imagen');
//Route::get('/experto', 'UsuarioController@escaner')->name('garantia.escaner'); 

//------------------------------Publicidad
Route::get('/advertising', 'PublicidadHerramientaController@index')->name('usuario.publicidad');

//------------------------------Publicidad material
Route::get('/advertising-materials/create', 'PublicidadMaterialController@create')->name('usuario.publicidad-material');
Route::post('/advertising-materials/create/save', 'PublicidadMaterialController@store')->name('usuario.guardar-publicidad-material');
Route::get('publicidadMaterial-imagen/{filename}', 'PublicidadMaterialController@getImage')->name('usuario.publicidadMaterial-imagen');

//------------------------------Publicidad herramienta
Route::get('/advertising-tools/create', 'PublicidadHerramientaController@create')->name('usuario.publicidad-herramienta');
Route::post('/advertising-tools/create/save', 'PublicidadHerramientaController@store')->name('usuario.guardar-publicidad-herramienta');
Route::get('publicidadHerramienta-imagen/{filename}', 'PublicidadHerramientaController@getImage')->name('usuario.publicidadHerramienta-imagen');

//------------------------------Usuario 
//Inicio
Route::get('/home', 'HomeController@index')->name('home');

//Registro
Route::get('/home/user/image/{filename}', 'UsuarioController@getImage')->name('usuario.imagen');

//Perfil
Route::resource('usuario', 'UsuarioController');


//------------------------------Administrador
//Publicidad
Route::get('/home/advertising', 'PublicidadHerramientaController@indexAdministrator')->name('admin.publicidad');

//Publicidad pendiente
Route::get('/home/advertising/pending', 'PublicidadHerramientaController@indexPendiente')->name('admin.publicidad-pendiente');
//Publicidad pendiente producto
Route::get('/home/advertising/pending/products/{buscar?}', 'ProductoController@publicidadPendiente')->name('admin.publicidad-pendiente-producto');
Route::get('/home/advertising/pending/product/activate/{id_pago}', 'ProductoController@activarPublicidad')->name('admin.publicidad-activar-producto');
Route::get('/home/advertising/pending/product/remove/{id_pago}', 'ProductoController@removerPublicidad')->name('admin.publicidad-remover-producto');
//Publicidad pendiente servicio
Route::get('/home/advertising/pending/services/{buscar?}', 'ServicioController@publicidadPendiente')->name('admin.publicidad-pendiente-servicio');
Route::get('/home/advertising/pending/service/activate/{id_pago}', 'ServicioController@activarPublicidad')->name('admin.publicidad-activar-servicio');
Route::get('/home/advertising/pending/service/remove/{id_pago}', 'ServicioController@removerPublicidad')->name('admin.publicidad-remover-servicio');
//Publicidad pendiente material
Route::get('/home/advertising/pending/materials/{buscar?}', 'PublicidadMaterialController@publicidadPendiente')->name('admin.publicidad-pendiente-material');
Route::get('/home/advertising/pending/material/activate/{id_pago}', 'PublicidadMaterialController@activarPublicidad')->name('admin.publicidad-activar-material');
Route::get('/home/advertising/pending/material/remove/{id_pago}', 'PublicidadMaterialController@removerPublicidad')->name('admin.publicidad-remover-material');
//Publicidad pendiente herramienta
Route::get('/home/advertising/pending/tools/{buscar?}', 'PublicidadHerramientaController@publicidadPendiente')->name('admin.publicidad-pendiente-herramienta');
Route::get('/home/advertising/pending/tool/activate/{id_pago}', 'PublicidadHerramientaController@activarPublicidad')->name('admin.publicidad-activar-herramienta');
Route::get('/home/advertising/pending/tool/remove/{id_pago}', 'PublicidadHerramientaController@removerPublicidad')->name('admin.publicidad-remover-herramienta');

//Publicidad activa
Route::get('/home/advertising/active', 'PublicidadHerramientaController@indexActiva')->name('admin.publicidad-activa');
//Publicidad activa producto
Route::get('/home/advertising/active/products/{buscar?}', 'ProductoController@publicidadActiva')->name('admin.publicidad-activa-producto');
Route::get('/home/advertising/active/product/remove/{id_pago}', 'ProductoController@removerPublicidadActiva')->name('admin.publicidadActiva-remover-producto');
//Publicidad activa servicio
Route::get('/home/advertising/active/services/{buscar?}', 'ServicioController@publicidadActiva')->name('admin.publicidad-activa-servicio');
Route::get('/home/advertising/active/service/remove/{id_pago}', 'ServicioController@removerPublicidadActiva')->name('admin.publicidadActiva-remover-servicio');
//Publicidad activa material
Route::get('/home/advertising/active/materials/{buscar?}', 'PublicidadMaterialController@publicidadActiva')->name('admin.publicidad-activa-material');
Route::get('/home/advertising/active/material/remove/{id_pago}', 'PublicidadMaterialController@removerPublicidadActiva')->name('admin.publicidadActiva-remover-material');
//Publicidad activa herramienta
Route::get('/home/advertising/active/tools/{buscar?}', 'PublicidadHerramientaController@publicidadActiva')->name('admin.publicidad-activa-herramienta');
Route::get('/home/advertising/active/tool/remove/{id_pago}', 'PublicidadHerramientaController@removerPublicidadActiva')->name('admin.publicidadActiva-remover-herramienta');

//Publicidad eliminda
Route::get('/home/advertising/removed', 'PublicidadHerramientaController@indexEliminada')->name('admin.publicidad-eliminada');
//Publicidad eliminada producto
Route::get('/home/advertising/removed/products/{buscar?}', 'ProductoController@publicidadEliminada')->name('admin.publicidad-eliminada-producto');
Route::get('/home/advertising/removed/product/delete/{id_pago}', 'ProductoController@eliminarPublicidad')->name('admin.publicidadRemovida-eliminar-producto');
Route::get('/home/advertising/removed/product/activate/{id_pago}', 'ProductoController@activarPublicidadRemovida')->name('admin.publicidadRemovida-activar-producto');
//Publicidad eliminada servicio
Route::get('/home/advertising/removed/services/{buscar?}', 'ServicioController@publicidadEliminada')->name('admin.publicidad-eliminada-servicio');
Route::get('/home/advertising/removed/service/delete/{id_pago}', 'ServicioController@eliminarPublicidad')->name('admin.publicidadRemovida-eliminar-servicio');
Route::get('/home/advertising/removed/service/activate/{id_pago}', 'ServicioController@activarPublicidadRemovida')->name('admin.publicidadRemovida-activar-servicio');
//Publicidad eliminada material
Route::get('/home/advertising/removed/materials/{buscar?}', 'PublicidadMaterialController@publicidadEliminada')->name('admin.publicidad-eliminada-material');
Route::get('/home/advertising/removed/material/delete/{id_pago}', 'PublicidadMaterialController@eliminarPublicidad')->name('admin.publicidadRemovida-eliminar-material');
Route::get('/home/advertising/removed/material/activate/{id_pago}', 'PublicidadMaterialController@activarPublicidadRemovida')->name('admin.publicidadRemovida-activar-material');
//Publicidad eliminada herramienta
Route::get('/home/advertising/removed/tools/{buscar?}', 'PublicidadHerramientaController@publicidadEliminada')->name('admin.publicidad-eliminada-herramienta');
Route::get('/home/advertising/removed/tool/delete/{id_pago}', 'PublicidadHerramientaController@eliminarPublicidad')->name('admin.publicidadRemovida-eliminar-herramienta');
Route::get('/home/advertising/removed/tool/activate/{id_pago}', 'PublicidadHerramientaController@activarPublicidadRemovida')->name('admin.publicidadRemovida-activar-herramienta');

//Sugerencias/Comentarios
Route::get('/home/suggestions-comments', 'ComentarioController@indexAdministrador')->name('admin.sug-com');
Route::get('/home/suggestions-comments/delete/{id}', 'ComentarioController@destroy')->name('admin.eliminar-sug-com');

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
