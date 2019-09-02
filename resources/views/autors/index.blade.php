@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-4 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left">
                        <h3>Listado de Autores</h3><br>
                    </div>
                    <div class="btn-group">
                        <a href="{{ route('autor.create') }}" class="btn btn-dark">Añadir un nuevo Autor</a>
                    </div>
                    <br><br>
                </div>
                    <div class="table table-striped">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead class="thead-dark">
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                                @forelse ($autors as $autor)
                                    <tr>
                                        <td>{{$autor->nombre}}</td>
                                        <td>
                                            <a href="{{ route('autor.show', $autor->id) }}"><i class="fas fa-eye"></i></a>
                                        
                                            <a href="{{ route('autor.edit', $autor->id) }}"><i class="fas fa-edit"></i></a>
                                       
                                            <form action="{{ route('autor.destroy', $autor->id)}}" method="post" class="d-inline"> 
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"><i class="fas fa-trash"></i></button>
                                        </td>                     
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">No hay registros cargados.</td>
                                    </tr>
                                @endforelse
                            </tbody>

                        </table>
                    </div>
                </div>
                {{ $autors->links() }}
            </div>
        </div>
    </div>

</div>

@endsection