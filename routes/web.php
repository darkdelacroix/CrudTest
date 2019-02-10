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


Route::get('/madre', function () {
    return view('layouts.tabla_cliente');
});

Route::get('/formulario_ubicacion','UbicacionController@store');

Route::get('/tabla_ubicaciones','UbicacionController@index');