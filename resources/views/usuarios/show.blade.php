@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"><h3>Detalles del usuario "{{$usuario->usuario}}"</h3></div>
                <div class="card-body col-md-8">
                    <p>Nombre: {{$usuario->name}}</p>
                    <p>Apellido: {{$usuario->apellido}}</p>
                    <p>E-mail: {{$usuario->email}}</p>
                    <p>Usuario: {{$usuario->usuario}}</p>
                    <p>Fecha Nacimiento: {{$usuario->fecha_nac}}</p>
                    <p>País: {{$usuario->pais}}</p>
                    <a href="{{ route('usuarios.index') }}" class="btn btn-dark">Atrás</a>
                </div>
            </div>
        </div>
        <div class="card col-md-3">
            <div class="mt-3">
                <img src="/storage/{{$usuario->avatar}}" class="card-img-top">
            </div>            
            <div class="card-body text-center">
                <h4 class="card-title">{{$usuario->name}} {{$usuario->apellido}}</h4>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{$usuario->email}}</li>
                <li class="list-group-item">{{$usuario->usuario}}</li>
                <li class="list-group-item">{{$usuario->pais}}</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Editar</a>
                <a href="#" class="card-link">Eliminar</a>
            </div>
        </div>
    </div>
</div>
@endsection