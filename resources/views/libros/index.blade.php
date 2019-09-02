@extends('layouts.master')
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
                        <a href="{{ route('libro.create') }}" class="btn btn-dark">Añadir un nuevo Libro</a>
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
                                @forelse ($libros as $libro)
                                    <tr>
                                        <td>{{$libro->nombre}}</td>
                                        <td>{{$libro->resumen}}</td>
                                        <td>{{$libro->npagina}}</td>
                                        <td>{{$libro->edicion}}</td>
                                        <td>{{$libro->autor->nombre}}</td>
                                        <td>{{$libro->precio}}</td>
                                        <td>
                                            <a href="{{ route('libro.show', $libro->id) }}"><i class="fas fa-eye"></i></a>
                                        </td>
                                        <td>
                                            <a href="{{ route('libro.edit', $libro->id) }}"><i class="fas fa-edit"></i></a>
                                        </td>
                                        <td>
                                            <form action="{{ route('libro.destroy', $libro->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"><i class="fas fa-trash"></i></button>
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
                </div>
                {{ $libros->links() }}
            </div>
        </div>
    </div>

</div>

@endsection