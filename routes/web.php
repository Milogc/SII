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
// Rutas para el 'Investigador'
Route::pattern('idpro', '[0-9]+');
Route::get('proyecto', 'Investigador\ProyectoController@index')->name('lstproyectos');
Route::post('proyecto', 'Investigador\ProyectoController@store')->name('addproyecto');
Route::get('proyecto/create', 'Investigador\ProyectoController@create')->name('crtproyecto');
Route::delete('proyecto/{idpro}', 'Investigador\ProyectoController@destroy')->name('delproyecto');
Route::get('proyecto/especial', 'Investigador\ProyectoController@especial')->name('pryecto.especial');
Route::post('proyectoespecial', 'Investigador\ProyectoController@sespecial')->name('pryectoespecial');
Route::get('colaboradores/{idpro}','Investigador\ColaboradoresController@index');
Route::post('colaboradores','Investigador\ColaboradoresController@invitar');
Route::post('colaboradores/desinvitar','Investigador\ColaboradoresController@desinvitar');
Route::post('colaboradores/aceptar' ,'Investigador\ColaboradoresController@aceptar' );
Route::post('colaboradores/rechazar','Investigador\ColaboradoresController@rechazar');
Route::get('entregables/{idpro}','Investigador\EntregablesController@index');
Route::post('entregables','Investigador\EntregablesController@agregar');
Route::post('entregables/eliminar','Investigador\EntregablesController@eliminar');
Route::get('cronograma/{idpro}','Investigador\CronogramaController@index');
Route::post('cronograma','Investigador\CronogramaController@agregar');
Route::post('cronograma/eliminar','Investigador\CronogramaController@eliminar');
Route::get('protocolo/{idpro}','Investigador\ProtocoloController@mostar');
Route::post('protocolo/{idpro}','Investigador\ProtocoloController@update');
Route::get('gastos/{idpro}','Investigador\GastosController@index');
Route::post('gastos','Investigador\GastosController@agregar');
Route::post('gastos/eliminar','Investigador\GastosController@eliminar');
Route::get('vinculacion/{idpro}','Investigador\VinculacionController@mostrar');
Route::post('vinculacion','Investigador\VinculacionController@agregar');
Route::post('vinculacion/eliminar','Investigador\VinculacionController@eliminar');
Route::get('someter/{idpro}','Investigador\SometerController@someter');
Route::post('someter/{idpro}','Investigador\SometerController@update');


//Rutas del Sistema
Route::get('/', function () {
    return view('sistema.welcome');
});
Route::fallback(function () {
    return view('sistema.NotFound');
});

Route::pattern('token', '[0-9]+');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Rutas que usa todo usuario
Route::get('pdfci01/{idpro}','DocumentosController@ci01');
Route::get('pdfci02/{idpro}','DocumentosController@ci02');
Route::get('pdfvinc/{idpro}','DocumentosController@vinculacion');


//Rutas del 'Coordinador'
Route::pattern('comvocatorium', '[0-9]+');
Route::resource('convocatoria','Coordinador\ConvocatoriaController');

Route::get('registrados', 'Coordinador\IntegracionController@registrados');


Route::resource('crudareas','Coordinador\CrudAreasController');
Route::resource('crudusers','Coordinador\CrudUsersController');
Route::resource('crudentregables','Coordinador\CrudEntregablesController');
Route::resource('crudgastos','Coordinador\CrudGastosController');
Route::resource('crudlineas','Coordinador\CrudLineasController');
Route::resource('crudinvestigacion','Coordinador\CrudInvestigacionsController');

Route::get('crudlongitudecaracteres','Coordinador\CrudLongitudCaracteresControllers@index');
Route::get('crudlongitudecaracteres/{idproy}','Coordinador\CrudLongitudCaracteresControllers@edit');
Route::post('crudlongitudecaracteres/{idproy}','Coordinador\CrudLongitudCaracteresControllers@updet');
