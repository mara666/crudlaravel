@extends('layouts.master')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
    
                @component('components.card')
    
                    @slot('header', 'Listado de Libros' )                        
    
                    @slot('body')
                    <div class="row">
                        <a href="{{ route('libro.create') }}" class="btn btn-dark">Añadir un nuevo Libro</a>
                    </div>

                    <div class="row">
                        <div class="table table-striped mt-2">
                            <table id="mytable" class="table table-bordred table-striped">
                                <thead class="thead-dark">
                                    <th>Nombre</th>
                                    <th>Resumen</th>
                                    <th>N° Páginas</th>
                                    <th>Edicion</th>
                                    <th>Autor</th>
                                    <th>Precio</th>
                                    <th>Acciones</th>
                                </thead>
                                <tbody>
                                    @forelse ($libros as $libro)
                                        <tr>
                                            <td>{{$libro->nombre}}</td>
                                            <td>{{$libro->resumen}}</td>
                                            <td>{{$libro->npagina}}</td>
                                            <td>{{$libro->edicion}}</td>
                                            <td>{{$libro->autor->nombre}}</td>
                                            <td>{{$libro->precio}}</td>
                                            <td>
                                                <a href="{{ route('libro.show', $libro->id) }}"><u><i>Ver</i></u></a>
                                                <a>/</a>
                                                <a href="{{ route('libro.edit', $libro->id) }}"><u><i>Editar</i></u></a>
                                                <a>/</a>
                                                <form id="form_delete" action="{{ route('libro.destroy', $libro->id)}}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
    
                                                <a href="{{ route('libro.destroy', $libro->id)}}" onclick="document.getElementById('form_delete').submit();; return false;"><u><i>Eliminar</i></u></a>
                                            </td>                     
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="12">No hay registros cargados.</td>
                                        </tr>
                                    @endforelse
                                </tbody>    
                            </table>
                        </div>                            
                            {{ $libros->links() }}
                    </div>
                    
                    @endslot
                @endcomponent
    
            </div>
        </div>
    </div>

@endsection