<?php

namespace App\Http\Controllers;

use App\Ubicacion;
use Illuminate\Http\Request;

class UbicacionController extends Controller
{

    public function index(Request $request)
    {
            $ubicaciones=Ubicacion::all();
            return view('vistas.ubicacion')->with('ubicaciones',$ubicaciones);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crear.ubicaciones');
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
        $ubicacion=new Ubicacion();
        $ubicacion['nombre_ubicacion']=$request->input('nombre_ubicacion');
        $ubicacion['descripcion_ubicacion']=$request->input('descripcion_ubicacion');
        $ubicacion['observaciones_ubicacion']=$request->input('observaciones_ubicacion');
        if($ubicacion->save()){
            return back() ->with('success','Creado correctamente');;
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
        $ubicacion=Ubicacion::find($id);
        return view('editar.vistaeditar')->with('ubicacion',$ubicacion);
    }

    public function update($id, Request $request)
    {
        //
        $ubicacion=Ubicacion::findOrFail($id);
        $ubicacion['codigo_ubicacion']=$request->input('codigo_ubicacion');
        $ubicacion['nombre_ubicacion']=$request->input('nombre_ubicacion');
        $ubicacion['descripcion_ubicacion']=$request->input('descripcion_ubicacion');
        $ubicacion['observaciones_ubicacion']=$request->input('observaciones_ubicacion');

        $ubicacion->save();
        $ubicaciones=Ubicacion::all();
        return view('vistas.ubicacion')->with('ubicaciones',$ubicaciones) ->with('success','Actualización completa');;

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
        $ubicacion=Ubicacion::findOrFail($id);
         $ubicacion->delete();
        return back()->withErrors(['Eliminacion completada']);

    }
}
