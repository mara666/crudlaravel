@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @component('components.card')

                @slot('header', 'Nuevo Libro')

                @slot('body')
                    <form method="POST" action="{{ route('libro.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nombre"
                                class="col-md-4 col-form-label text-md-right">{{ __('Nombre del Libro') }}</label>

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

                        <div class="form-group row">
                            <label for="npagina"
                                class="col-md-4 col-form-label text-md-right">{{ __('Número de Páginas') }}</label>

                            <div class="col-md-6">
                                <input id="npagina" type="text"
                                    class="form-control @error('npagina') is-invalid @enderror" name="npagina"
                                    value="{{ old('npagina') }}" required autocomplete="npagina">

                                @error('npagina')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="edicion"
                                class="col-md-4 col-form-label text-md-right">{{ __('Edición') }}</label>

                            <div class="col-md-6">
                                <input id="edicion" type="text"
                                    class="form-control @error('edicion') is-invalid @enderror" name="edicion"
                                    value="{{ old('edicion') }}" required autocomplete="npagina">

                                @error('edicion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="resumen"
                                class="col-md-4 col-form-label text-md-right">{{ __('Resúmen del Libro') }}</label>

                            <div class="col-md-6">
                                <input id="resumen" type="textarea"
                                    class="form-control @error('resumen') is-invalid @enderror" name="resumen"
                                    value="{{ old('resumen') }}" required autocomplete="resumen">

                                @error('resumen')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="precio"
                                class="col-md-4 col-form-label text-md-right">{{ __('Precio del Libro') }}</label>

                            <div class="col-md-6">
                                <input id="precio" type="text"
                                    class="form-control @error('precio') is-invalid @enderror" name="precio"
                                    value="{{ old('precio') }}" required autocomplete="precio">

                                @error('precio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="autor" class="col-md-4 col-form-label text-md-right">{{ __('Autor') }}</label>
                  
                            <div class="col-md-6">
                                <select id="autor_id" class="form-control @error('autor') is-invalid @enderror" name="autor_id" required>
                                  @foreach ($autors as $autor)
                                    <option value="{{$autor->id}}" {{$autor->id == old("autor") ? "selected" : ""}}>
                                      {{$autor->nombre}}
                                    </option>
                                  @endforeach
                  
                                </select>
                                @error('autor')
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

                                <a href="{{ route('libro.index') }}" class="btn btn-dark">Atrás</a>
                            </div>
                        </div>
                    </form>
                @endslot
            @endcomponent
        </div>
    </div>
</div>
@endsection