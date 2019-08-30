<?php

namespace App\Http\Controllers;

use App\Autor;
use App\Libro;

use Illuminate\Http\Request;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::all();
        $autors = Autor::orderBy('id','DESC')->paginate(10);
        return view('autors.index',compact('autors', 'autors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autors = Autor::all();
        return view('autors.create', compact('autors'));
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
            'nombre'=>'required|string|min:3|unique:autors,nombre'
        ];

        $mensajes = [
            'string'=>'El campo :attribute debe ser un texto', 
            'min'=>'El campo :attribute debe tener un minimo de :min', 
            'max'=>'El campo :attribute debe tener un máximo de :max', 
            'numeric'=>'El campo :attribute debe ser un numero', 
            'integer'=>'El campo :attribute debe ser un número entero', 
            'unique'=>'El campo :attribute se encuentra repetido'
        ];
        
        $this->validate($request, $reglas, $mensajes);

        $autor = new Autor();

        $autor->nombre = $request->nombre;
  
        $autor->save();

        return redirect()->route('autor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function show(Autor $autor)
    {
        return  view('autors.show',compact('autor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function edit(Autor $autor)
    {
        $libros = Autor::all();
        return view('autors.edit',compact('autor', 'libros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autor $autor)
    {
        $reglas = [
            'nombre'=>'required|string|min:3'
        ];

        $mensajes = [
            'string'=>'El campo :attribute debe ser un texto', 
            'min'=>'El campo :attribute debe tener un minimo de :min', 
            'max'=>'El campo :attribute debe tener un máximo de :max', 
            'numeric'=>'El campo :attribute debe ser un numero', 
            'integer'=>'El campo :attribute debe ser un número entero', 
            'unique'=>'El campo :attribute se encuentra repetido'
        ];
        
        $this->validate($request, $reglas, $mensajes);

        $autor = new Autor();

        $autor->nombre = $request->nombre;
  
        $autor->save();

        return redirect()->route('autor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autor $autor)
    {
        $autor->delete();
        return redirect()->route('autor.index');
    }
}
