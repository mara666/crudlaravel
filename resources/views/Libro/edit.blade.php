@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">
                <h3>Actualizar datos del libro "{{$libro->nombre}}"</h3>
                </div>

                <div class="card-body">
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('libro.update',$libro->id) }}" role="form">
                        @csrf
                        <input name="_method" type="hidden" value="PATCH">

                        <div class="form-group row">
                            <label for="nombre"
                                class="col-md-4 col-form-label text-md-right">{{ __('Nombre del Libro') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text"
                                    class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                                    value="{{$libro->nombre}}" required autocomplete="nombre" autofocus>

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
                                    value="{{$libro->npagina}}" required autocomplete="npagina">

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
                                    value="{{$libro->edicion}}" required autocomplete="npagina">

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
                                    value="{{$libro->resumen}}" required autocomplete="resumen">

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
                                    value="{{$libro->precio}}" required autocomplete="precio">

                                @error('precio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="autor"
                                class="col-md-4 col-form-label text-md-right">{{ __('Autor del Libro') }}</label>

                            <div class="col-md-6">
                                <input id="autor" type="text" class="form-control @error('autor') is-invalid @enderror"
                                    name="autor" value="{{$libro->autor}}" required autocomplete="autor">

                                @error('autor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                        {{ __('Guardar') }}
                                </button>

                                <a href="{{ route('libro.index') }}" class="btn btn-warning">Atrás</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection