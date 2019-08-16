@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left">
                        <h3>Lista Libros</h3>
                    </div>
                    <div class="pull-right">
                        <div class="btn-group">
                            <a href="{{ route('libro.create') }}" class="btn btn-info">Añadir Libro</a>
                        </div>
                    </div>
                    <div class="table-container">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                                <th>Nombre</th>
                                <th>Resumen</th>
                                <th>No. Páginas</th>
                                <th>Edicion</th>
                                <th>Autor</th>
                                <th>Precio</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </thead>
                            <tbody>
                                @if($libros->count())
                                @foreach($libros as $libro)
                                <tr>
                                    <td>{{$libro->nombre}}</td>
                                    <td>{{$libro->resumen}}</td>
                                    <td>{{$libro->npagina}}</td>
                                    <td>{{$libro->edicion}}</td>
                                    <td>{{$libro->autor}}</td>
                                    <td>{{$libro->precio}}</td>
                                    <td>
                                        <a class="btn btn-primary btn-xs" href="{{action('LibroController@edit', $libro->id)}}">Actualizar</a>
                                    </td>
                                    <td>
                                        <form action="{{action('LibroController@destroy', $libro->id)}}" method="post">
                                            {{csrf_field()}}
                                            <input name="_method" type="hidden" value="DELETE">

                                            <button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="8">No hay registros cargados.</td>
                                </tr>
                                @endif
                            </tbody>

                        </table>
                    </div>
                </div>
                {{ $libros->links() }}
            </div>
        </div>
    </div>

</div>

@endsection