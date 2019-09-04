@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"><h3>Detalles del Usuario "{{$usuario->usuario}}"</h3></div>
                <div class="card-body">
                    <p>Nombre: {{$usuario->name}}</p>
                    <p>Apellido: {{$usuario->apellido}}</p>
                    <p>E-mail: {{$usuario->email}}</p>
                    <p>Usuario: {{$usuario->usuario}}</p>
                    <p>Fecha Nacimiento: {{$usuario->fecha_nac}}</p>
                    <p>País: {{$usuario->pais}}</p>
                </div>
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <a href="{{ route('usuarios.index') }}" class="btn btn-dark">Atrás</a>
            </div>
        </div>
    </div>
</div>
@endsection