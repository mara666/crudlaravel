@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @component('components.card')

                @slot('header', 'Nuevo Autor')

                @slot('body')
                    <form method="POST" action="{{ route('autor.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nombre"
                                class="col-md-4 col-form-label text-md-right">{{ __('Nombre del Autor') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text"
                                    class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                                    value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                                @error('nombre')
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

                                <a href="{{ route('autor.index') }}" class="btn btn-dark">Atrás</a>
                            </div>
                        </div>
                    </form>
                @endslot
            @endcomponent

        </div>
    </div>
</div>
@endsection