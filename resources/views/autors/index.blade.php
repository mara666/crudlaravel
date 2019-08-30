@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left">
                        <h3>Listado de Autores</h3><br>
                    </div>
                    <div class="btn-group">
                        <a href="{{ route('autor.create') }}" class="btn btn-warning">Añadir un nuevo Autor</a>
                    </div>
                    <br><br>
                </div>
                    <div class="table table-striped">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                                <th>Nombre</th>
                            </thead>
                            <tbody>
                                @forelse ($autors as $autor)
                                    <tr>
                                        <td>{{$autor->nombre}}</td>
                                        <td>
                                            <a class="btn btn-info btn-xs" href="{{ route('autor.show', $autor->id) }}"></a>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-xs" href="{{ route('autor.edit', $autor->id) }}"></a>
                                        </td>
                                        <td>
                                            <form action="{{ route('autor.destroy', $autor->id)}}" method="post"> <!--<i class="far fa-edit"></i>-->
                                                @csrf
                                                @method('DELETE')

                                                <button class="btn btn-danger btn-xs" type="submit"></button><!--<span class="glyphicon glyphicon-trash"></span>-->
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
                {{ $autors->links() }}
            </div>
        </div>
    </div>

</div>

@endsection