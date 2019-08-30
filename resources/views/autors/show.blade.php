@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"><h3>Detalles del autor "{{$autor->nombre}}"</h3></div>
                <div class="card-body">
                    <p>Autor: {{$autor->nombre}}</p>
                </div>
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <a href="{{ route('autor.index') }}" class="btn btn-warning">Atrás</a>
            </div>
        </div>
    </div>
</div>
@endsection