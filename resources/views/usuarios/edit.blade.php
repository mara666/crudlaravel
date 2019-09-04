@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @component('components.card')

                @slot('header', 'Actualizar datos de ' . $usuario->usuario)

                @slot('body')
                    <form method="POST" action="{{ route('usuarios.update',$usuario->id) }}" role="form">
                        @csrf
                        @method('PATCH')

                        <div class="form-group row">
                            <label for="name"
                                class="col-md-4 col-form-label text-md-right">{{ __('Nombre del Usuario') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{$usuario->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apellido"
                                class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="apellido" type="text"
                                    class="form-control @error('apellido') is-invalid @enderror" name="apellido"
                                    value="{{$usuario->apellido}}" required autocomplete="apellido">

                                @error('apellido')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{$usuario->email}}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usuario"
                                class="col-md-4 col-form-label text-md-right">{{ __('Resúmen del Libro') }}</label>

                            <div class="col-md-6">
                                <input id="usuario" type="text"
                                    class="form-control @error('usuario') is-invalid @enderror" name="usuario"
                                    value="{{$usuario->usuario}}" required autocomplete="usuario">

                                @error('usuario')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fecha_nac"
                                class="col-md-4 col-form-label text-md-right">{{ __('Fecha de Nacimiento') }}</label>

                            <div class="col-md-6">
                                <input id="fecha_nac" type="date"
                                    class="form-control @error('fecha_nac') is-invalid @enderror" name="fecha_nac"
                                    value="{{$usuario->fecha_nac}}" required autocomplete="fecha_nac">

                                @error('fecha_nac')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pais"
                                class="col-md-4 col-form-label text-md-right">{{ __('Resúmen del Libro') }}</label>

                            <div class="col-md-6">
                                <input id="pais" type="text"
                                    class="form-control @error('pais') is-invalid @enderror" name="pais"
                                    value="{{$usuario->pais}}" required autocomplete="pais">

                                @error('pais')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-danger">
                                        {{ __('Guardar') }}
                                </button>

                                <a href="{{ route('usuarios.index') }}" class="btn btn-dark">Atrás</a>
                            </div>
                        </div>
                    </form>
                @endslot
            @endcomponent
        </div>
    </div>
</div>
@endsection