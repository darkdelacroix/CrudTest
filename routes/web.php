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

use Illuminate\Http\Request;
Route::get('/', function () {
    return view('layouts.app');
});
Route::get('/holamundo', function () {
  echo 'holamundo';

 /* $users=\App\User::find(2);
  $users->roles;
  $user=\Illuminate\Support\Facades\DB::select('select * from users where id=2');
  $inventario=\Illuminate\Support\Facades\DB::select('select * from marcas,inventarios where marcas.id=inventarios.id');
  echo json_encode( $inventario);
*/
    $usuarios=DB::table('users');
    echo json_encode( $usuarios);

});
Route::get('/ejemplo', function () {
//    $consulta=\Illuminate\Support\Facades\DB::select('select * from users');
    $consulta=\App\User::all();
    $inventario=\App\Inventario::find(1);

    $marcas=$inventario->marcas;
    echo json_encode($consulta);
    /*$user=\App\User::find(1);
    $var=$user->roles;
    echo json_encode($var);*/
//    return view('layouts.app');

});

Route::get('/pantallas', function () {
    $pantallas=\App\Pantalla::all();

    return view('layouts.tabla_pantallas')->with('pantallas',$pantallas);
});

Route::get('/origenes', function () {
    $origenes=\App\Origen::all();

    return view('layouts.tabla_origenes')->with('origenes',$origenes);
});

Route::get('/origenes_crear', function () {

    return view('formularios.formulario_origenes');
});

Route::get('/formulario_origenes', function (Request $request) {
    $origen=new \App\Origen();

    $origen['nombre_origenes']=$request->input('nombre_origen');
    $origen['observaciones_origenes']=$request->input('observaciones_origen');
    $origen->save();

    return redirect('/origenes');
});

Route::get('/origen_editar/{id}', function ($id) {
    $origen=\App\Origen::find($id);
    return view('editar.origenes_editar')->with('origen',$origen);
});

Route::get('/actualizar_origenes/{id}', function (Request $request,$id) {
    //$origen=\App\Origen::find($id);
    $origen= DB::select('select * from origenes where  id = :id ',['id' => $id]);
    $origen['nombre_origenes']=$request->input('nombre_origen');
    $origen['observaciones_origenes']=$request->input('observaciones_origen');
    $origen->save();

    return redirect('/origenes');
});

Route::get('/origen_borrar/{id}', function ($id) {
    $origen=\App\Origen::find($id);
    $origen->delete();
    return redirect('/origenes');
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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/inventario_crear','InventarioController@create');
    Route::get('/formulario_inventario','InventarioController@store');
    Route::get('/inventario','InventarioController@index');
    Route::get('/inventario_borrar/{id}','InventarioController@destroy');
    Route::get('/inventario_editar/{id}','InventarioController@edit');
    Route::get('/inventario_update/{id}/','InventarioController@update');

});