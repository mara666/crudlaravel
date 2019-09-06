@extends('layouts.master')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
    
                @component('components.card')
    
                    @slot('header', 'Consultas de usuarios' )                        
    
                    @slot('body')

                    <div class="row">
                        <div class="table table-striped mt-2">
                            <table id="mytable" class="table table-bordred table-striped">
                                <thead class="thead-dark">
                                    <th>Nombre</th>
                                    <th>E-mail</th>
                                    <th>Asunto</th>
                                    <th>Mensaje</th>
                                    <th>Acciones</th>
                                </thead>
                                <tbody>
                                    @forelse ($contactos as $contacto)
                                        <tr>
                                            <td>{{$contacto->nombre}}</td>
                                            <td>{{$contacto->email}}</td>
                                            <td>{{$contacto->asunto}}</td>
                                            <td>{{$contacto->mensaje}}</td>
                                            <td>
                                                <a href="{{ route('contactos.show', $contacto->id) }}"><u><i>Ver</i></u></a>
                                                <a>/</a>
                                                <form id="form_delete" action="{{ route('contactos.destroy', $contacto->id)}}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
    
                                                <a href="{{ route('contactos.destroy', $contacto->id)}}" onclick="document.getElementById('form_delete').submit();; return false;"><u><i>Eliminar</i></u></a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="12">No hay consultas de usuarios...</td>
                                        </tr>
                                    @endforelse
                                </tbody>    
                            </table>
                        </div>                            
                            {{ $contactos->links() }}
                    </div>
                    
                    @endslot
                @endcomponent
    
            </div>
        </div>
    </div>

@endsection