<?php

namespace App\Http\Controllers;

use App\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{

    public function index(Request $request)
    {
        $marcas=Marca::all();
        return view('vistas.marcas')->with('marcas',$marcas);

    }


    public function create()
    {
        //
        return view('crear.marcas');
    }


    public function store(Request $request)
    {
        //
        $marca=new Marca();


        $marca['nombre_marca']=$request->input('nombre_marca');
        $marca['observaciones_marca']=$request->input('observaciones_marca');
        if($marca->save()){
            return redirect('/marcas') ->with('success','Creado correctamente');
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
        $marca=Marca::find($id);
        return view('editar.marcas_editar')->with('marca',$marca);
    }

    public function update($id, Request $request)
    {
        //
        $marca=Marca::findOrFail($id);
        $marca['nombre_marca']=$request->input('nombre_marca');
        $marca['observaciones_marca']=$request->input('observaciones_marca');
        $marca->save();
        $marcas=Marca::all();
        return view('vistas.marcas')->with('marcas',$marcas) ->with('success','Actualización completa');;

    }


    public function destroy($id)
    {
        //
        $marca=Marca::findOrFail($id);
        $marca->delete();
        return back()->withErrors(['Eliminacion completada']);

    }
}