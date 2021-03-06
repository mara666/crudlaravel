<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $usuarios = User::all();
        $usuarios = User::paginate(10);
        return view('usuarios.index',compact('usuarios'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reglas = [
            'name' => ['string', 'max:255'],
            'apellido' => ['string', 'max:255'],
            'usuario' => ['string', 'max:255'],
            'pais' => ['string', 'max:255'],
            'email' => ['string', 'email', 'max:255']
        ];

        $mensajes = [
            'string'=>'El campo :attribute debe ser un texto', 
            'min'=>'El campo :attribute debe tener un minimo de :min', 
            'max'=>'El campo :attribute debe tener un máximo de :max', 
            'numeric'=>'El campo :attribute debe ser un numero', 
            'integer'=>'El campo :attribute debe ser un número entero',
            'unique'=>'Este e-mail ya existe'
        ];

        $this->validate($request, $reglas, $mensajes);
 
        $usuario = new User();

        $usuario->name = $request->name;
        $usuario->apellido = $request->apellido;
        $usuario->usuario = $request->usuario;
        $usuario->pais = $request->pais;
        $usuario->email = $request->email;
  
        $usuario->save();
        
        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $usuario)
    {
        return view('usuarios.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $usuario)
    {
        $reglas = [
            'name' => ['string', 'max:255'],
            'apellido' => ['string', 'max:255'],
            'usuario' => ['string', 'max:255'],
            'pais' => ['string', 'max:255'],
            'email' => ['string', 'email', 'max:255']
        ];

        $mensajes = [
            'string'=>'El campo :attribute debe ser un texto', 
            'min'=>'El campo :attribute debe tener un minimo de :min', 
            'max'=>'El campo :attribute debe tener un máximo de :max', 
            'numeric'=>'El campo :attribute debe ser un numero', 
            'integer'=>'El campo :attribute debe ser un número entero',
            'unique'=>'Este e-mail ya existe'
        ];
        
        $this->validate($request, $reglas, $mensajes);
 
        $usuario = new User();

        $usuario->name = $request->name;
        $usuario->apellido = $request->apellido;
        $usuario->usuario = $request->usuario;
        $usuario->pais = $request->pais;
        $usuario->email = $request->email;
  
        $usuario->save();
        
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}
