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
    return view('layouts.app');
});

Auth::routes();
//Rutas para las ubicaciones
Route::group(['middleware' => 'auth'], function () {
    Route::get('/crear_ubicacion','UbicacionController@create');
    Route::get('/formulario_ubicacion','UbicacionController@store');
    Route::get('/ubicaciones','UbicacionController@index');
    Route::get('/ubicacion_borrar/{id}','UbicacionController@destroy');
    Route::get('/ubicacion_editar/{id}','UbicacionController@edit');
    Route::get('/formulario_update/{id}/','UbicacionController@update');

});
Route::group(['middleware' => 'auth'], function () {
    Route::get('/crear_marca','MarcaController@create');
    Route::get('/formulario_marca','MarcaController@store');
    Route::get('/marcas','MarcaController@index');
    Route::get('/marca_borrar/{id}','MarcaController@destroy');
    Route::get('/marca_editar/{id}','MarcaController@edit');
    Route::get('/marca_update/{id}/','MarcaController@update');

});
Route::group(['middleware' => ['auth','role:admin']], function () {
    Route::get('/crear_usuario','UsuarioController@create');
    Route::get('/formulario_usuario','UsuarioController@store');
    Route::get('/usuarios','UsuarioController@index');
    Route::get('/usuario_borrar/{id}','UsuarioController@destroy');
    Route::get('/usuario_editar/{id}','UsuarioController@edit');
    Route::get('/usuario_update/{id}/','UsuarioController@update');
});
Route::get('/home', 'HomeController@index')->name('home');
