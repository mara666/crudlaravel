@extends('layouts.master')

@section('title')
    Inicio
@endsection

@section('content')
    <div class="container mt-4">
        <div class="jumbotron">
            <h1>Bienvenido!</h1>
            <h5 class="mt-4">Podes chequear nuestros libros!</h5>
            <a href="/libro">
                <button class="btn btn-outline-dark mt-4" type="button" name="button">Libros</button>
            </a>
            <a href="/autor">
                <button class="btn btn-outline-dark mt-4" type="button" name="button">Autores</button>
            </a>
        </div>
    </div>
@endsection


    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> --}}