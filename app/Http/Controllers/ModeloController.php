<?php

namespace App\Http\Controllers;

use App\Modelo;
use Illuminate\Http\Request;

class ModeloController extends Controller
{

    public function index(Request $request)
    {
        $modelos=Modelo::all();
        return view('layouts.tabla_modelos')->with('modelos',$modelos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('formularios.formulario_modelos');
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
        $modelo=new Modelo();
        $modelo['nombre_modelo']=$request->input('nombre_modelo');
        $modelo['observaciones_modelo']=$request->input('observaciones_modelo');

        if($modelo->save()){
            return redirect('/modelos') ->with('success','Creado correctamente');;
        }else{
            $errors="Error";
            return     back()->withErrors($errors);
        }


    }

    public function show(Ubicacion $ubicacion)
    {
        //
    }

    public function edit($id )
    {
        //
        $modelo=Modelo::find($id);
        return view('editar.modelos_editar')->with('modelo',$modelo);
    }

    public function update($id, Request $request)
    {
        //
        $modelo=Modelo::findOrFail($id);
        $modelo['nombre_modelo']=$request->input('nombre_modelo');
        $modelo['observaciones_modelo']=$request->input('observaciones_modelo');

        $modelo->save();
        $modelos=Modelo::all();
        return view('layouts.tabla_modelos')->with('modelos',$modelos) ->with('success','Actualización completa');;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ubicacion  $ubicacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $modelo=Modelo::findOrFail($id);
        $modelo->delete();
        return back()->withErrors(['Eliminacion completada']);

    }
}
