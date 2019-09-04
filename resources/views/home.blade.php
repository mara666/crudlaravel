@extends('layouts.app')

@section('title')
    Inicio
@endsection

@section('content')
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar navbar-dark bg-danger">
                <a class="navbar-brand" href="/">Biblioteca</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/libro">Libros</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/autor">Autores</a>
                        </li>
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Administrar
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/usuarios">Usuarios</a>
                                <a class="dropdown-item" href="/consultas">Consultas</a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="¿Qué deseas buscar?" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                </div>
            </nav>
        </div>
    </header>
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