<?php

namespace App\Http\Controllers;

use App\Estado;
use App\Inventario;
use App\Marca;
use App\Modelo;
use App\Origen;
use App\Pantalla;
use App\Procesador;
use App\Provedor;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $inventarios=Inventario::all();
        return view('layouts.tabla_inventarios')->with('inventarios',$inventarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $marcas=Marca::all();
        $modelos=Modelo::all();
        $pantallas=Pantalla::all();
        $procesadores=Procesador::all();
        $estados=Estado::all();
        $origenes=Origen::all();
        $proveedores=Provedor::all();
        return view('formularios.formulario_inventario',compact('marcas','modelos','pantallas',
            'procesadores','estados','origenes','proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $inventario=new Inventario();
        $inventario['nombre_inventario']=$request->input('nombre_inventario');
        $inventario['codigo_marca_inventario']=$request->input('codigo_marca_inventario');
        $inventario['codigo_modelo_inventario']=$request->input('codigo_modelo_inventario');
        $inventario['numero_serie_inventario']=$request->input('numero_serie_inventario');
        $inventario['codigo_cpu_inventario']=$request->input('codigo_cpu_inventario');
        $inventario['codigo_pantalla_inventario']=$request->input('codigo_pantalla_inventario');
        $inventario['codigo_origen_inventario']=$request->input('codigo_origen_inventario');
        $inventario['codigo_proveedor_inventario']=$request->input('codigo_proveedor_inventario');
        $inventario['codigo_estado_inventario']=$request->input('codigo_estado_inventario');
        $inventario['fecha_entrada_inventario']=$request->input('fecha_entrada_inventario');
        $inventario['observaciones_inventario']=$request->input('observaciones_inventario');
        $inventario['garantia_inventario']=$request->input('garantia_inventario');
        $inventario->save();

        return redirect('/inventario');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function show(Inventario $inventario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventario $inventario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventario $inventario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventario $inventario)
    {
        //
    }
}
