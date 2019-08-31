<?php

namespace App\Http\Controllers;
use App\Libro;
use App\Autor;

use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autors = Autor::all();
        $libros = Libro::orderBy('id','DESC')->paginate(10);
        return view('libros.index',compact('libros', 'autors')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autors = Autor::all();
        return view('libros.create', compact('autors'));
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
            'nombre'=>'required|string|min:3|unique:libros,nombre', 
            'resumen'=>'required|string', 
            'npagina'=>'required|integer|min:0|max:2500', 
            'edicion'=>'required|numeric|min:0', 
            "autor_id" => "required|exists:autors,id",
            'precio'=>'required|numeric|min:0'
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

        // $libro = new Libro();

        // $libro->nombre = $request->nombre;
        // $libro->resumen = $request->resumen;
        // $libro->npagina = $request->npagina;
        // $libro->edicion = $request->edicion;
        // $libro->autor_id = $request->autor;
        // $libro->precio = $request->precio;
  
        // $libro->save();

        Libro::create($request->all());

        return redirect()->route('libro.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Libro $libro)
    {
        return  view('libros.show', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro)
    {
        $autors = Autor::all();
        return view('libros.edit', compact('libro','autors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libro $libro)
    {
        $reglas = [
            'nombre'=>'required|string|min:3', 
            'resumen'=>'required|string', 
            'npagina'=>'required|integer|min:0|max:2500', 
            'edicion'=>'required|numeric|min:0', 
            "autor" => "required", 
            'precio'=>'required|numeric|min:0'
        ];

        $mensajes = [
            'string'=>'El campo :attribute debe ser un texto', 
            'min'=>'El campo :attribute debe tener un minimo de :min', 
            'max'=>'El campo :attribute debe tener un máximo de :max', 
            'numeric'=>'El campo :attribute debe ser un numero', 
            'integer'=>'El campo :attribute debe ser un número entero'
        ];
        
        $this->validate($request, $reglas, $mensajes);
 
        $libro = new Libro();

        $libro->nombre = $request->nombre;
        $libro->resumen = $request->resumen;
        $libro->npagina = $request->npagina;
        $libro->edicion = $request->edicion;
        $libro->autor_id = $request->autor;
        $libro->precio = $request->precio;
  
        $libro->save();
        
        return redirect()->route('libro.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {
        $libro->delete();
        return redirect()->route('libro.index');
    }
}
