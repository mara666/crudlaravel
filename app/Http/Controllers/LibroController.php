<?php

namespace App\Http\Controllers;
use App\Libro;

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
        //
        $libros=Libro::orderBy('id','DESC')->paginate(3);
        return view('Libro.index',compact('libros')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Libro.create');
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
            'autor'=>'required|string', 
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
        //
        $this->validate($request, $reglas, $mensajes);
        Libro::create($request->all());
        return redirect()->route('libro.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $libros=Libro::find($id);
        return  view('libro.show',compact('libros'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $libro=libro::find($id);
        return view('libro.edit',compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reglas = [
            'nombre'=>'required|string|min:3', 
            'resumen'=>'required|string', 
            'npagina'=>'required|integer|min:0|max:2500', 
            'edicion'=>'required|numeric|min:0', 
            'autor'=>'required|string', 
            'precio'=>'required|numeric|min:0'
        ];

        $mensajes = [
            'string'=>'El campo :attribute debe ser un texto', 
            'min'=>'El campo :attribute debe tener un minimo de :min', 
            'max'=>'El campo :attribute debe tener un máximo de :max', 
            'numeric'=>'El campo :attribute debe ser un numero', 
            'integer'=>'El campo :attribute debe ser un número entero'
        ];
        //
        $this->validate($request, $reglas, $mensajes);
 
        libro::find($id)->update($request->all());
        return redirect()->route('libro.index')->with('success','Registro actualizado satisfactoriamente');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Libro::find($id)->delete();
        return redirect()->route('libro.index')->with('success','Registro eliminado satisfactoriamente');

    }
}
