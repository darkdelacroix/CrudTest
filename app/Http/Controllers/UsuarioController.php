<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //

    public function index(Request $request)
    {
        $usuarios=User::all();
        return view('vistas.usuarios')->with('usuarios',$usuarios);
//   return response()->json($ubicaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles=Role::all();
        return view('crear.usuarios')->with('roles',$roles);
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
        $usuario=new User();
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'name' => 'required|string|max:50',
            'password' => 'required',
            'nombre_completo'=> 'max:20'
        ]);

            if($validator->fails())
                return redirect()->back()->withInput()->withErrors($validator);

        $usuario['name']=$request->input('name');
        $usuario['email']=$request->input('email');
        $usuario['password']=bcrypt($request->input('password'));
        $usuario['nombre_completo']=$request->input('nombre_completo');
        $usuario['dni']=$request->input('dni');
        $usuario['telefono']=$request->input('telefono');
        $usuario->roles()->attach(Role::where('id', $request->input('perfil'))->first());
        if($usuario->save()){
            return back() ->with('success','Creado correctamente');;
        }else{
            $errors="Error";
            return     back()->withErrors($errors);
        }


    }

    public function show( )
    {
        //
    }

    public function edit($id )
    {
        //
        $user=User::find($id);
        $roles=Role::all();
        return view('editar.usuarios_editar')->with('user',$user)->with('roles',$roles);
    }

    public function update($id, Request $request)
    {
        //
        $usuario=User::findOrFail($id);
        $usuario['name']=$request->input('name');
        $usuario['email']=$request->input('email');
        $usuario['password']=bcrypt($request->input('password'));
        $usuario['nombre_completo']=$request->input('nombre_completo');
        $usuario['dni']=$request->input('dni');
        $usuario['telefono']=$request->input('telefono');
        $usuario->roles()->attach(Role::where('id', $request->input('perfil'))->first());
        $usuario->save();
        $usuarios=User::all();
        return view('vistas.usuarios')->with('usuarios',$usuarios) ->with('success','Actualización completa');;

    }


    public function destroy($id)
    {
        //
        $user=User::findOrFail($id);
        $user->delete();
        return back()->withErrors(['Eliminacion completada']);

    }
}
