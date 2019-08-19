@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left">
                        <h3>Listado de Libros</h3><br>
                    </div>
                    <div class="btn-group">
                        <a href="{{ route('libro.create') }}" class="btn btn-warning">Añadir un nuevo Libro</a>
                    </div>
                    <br><br>
                </div>
                    <div class="table table-striped">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                                <th>Nombre</th>
                                <th>Resumen</th>
                                <th>N° Páginas</th>
                                <th>Edicion</th>
                                <th>Autor</th>
                                <th>Precio</th>
                            </thead>
                            <tbody>
                                @if($libros->count()>0)
                                @foreach($libros as $libro)
                                <tr>
                                    <td>{{$libro->nombre}}</td>
                                    <td>{{$libro->resumen}}</td>
                                    <td>{{$libro->npagina}}</td>
                                    <td>{{$libro->edicion}}</td>
                                    <td>{{$libro->autor}}</td>
                                    <td>{{$libro->precio}}</td>
                                    <td>
                                        <a class="btn btn-info btn-xs" href="{{action('LibroController@show', $libro->id)}}">Ver</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-xs" href="{{action('LibroController@edit', $libro->id)}}">Editar</a>
                                    </td>
                                    <td>
                                        <form action="{{action('LibroController@destroy', $libro->id)}}" method="post">
                                            @csrf
                                            
                                            <input name="_method" type="hidden" value="DELETE">

                                            <button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
                                    </td>                                    
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="12">No hay registros cargados.</td>
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