@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"><h3>Detalles del libro "{{$libros->nombre}}"</h3></div>
                <div class="card-body">
                    <p>Resumen: {{$libros->resumen}}</p>
                    <p>N° de páginas: {{$libros->npagina}}</p>
                    <p>Edición: {{$libros->edicion}}</p>
                    <p>Autor: {{$libros->autor}}</p>
                    <p>Precio: {{$libros->precio}}</p>
                </div>
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <a href="{{ route('libro.index') }}" class="btn btn-warning">Atrás</a>
            </div>
        </div>
    </div>
</div>
@endsection