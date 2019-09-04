@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            @component('components.card')

                @slot('header', 'Listado de Autores' )                        

                @slot('body')
                <div class="row">
                    <a href="{{ route('autor.create') }}" class="btn btn-dark">Añadir un nuevo Autor</a>
                </div>

                {{-- <div class="mt-3">
                        <input type="text" id="formulario" class="form-control my-2">
                        <button class="btn btn-info mb-2" id="boton">Buscar</button>
                        <ul id="resultado">
                        </ul>
                    </div> --}}

                <div class="row">
                    <div class="table table-striped mt-2">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead class="thead-dark">
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                                @forelse ($autors as $autor)
                                    <tr>
                                        <td>{{$autor->nombre}}</td>
                                        <td>
                                            <a href="{{ route('autor.show', $autor->id) }}"><u><i>Ver</i></u></a>
                                            <a>/</a>
                                            <a href="{{ route('autor.edit', $autor->id) }}"><u><i>Editar</i></u></a>
                                            <a>/</a>
                                            <form id="form_delete" action="{{ route('autor.destroy', $autor->id)}}" method="post" class="d-inline"> 
                                                @csrf
                                                @method('DELETE')
    
                                            <a href="{{ route('autor.destroy', $autor->id)}}" onclick="document.getElementById('form_delete').submit(); return false;"><u><i>Eliminar</i></u></a>
                                        </td>                     
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">No hay registros cargados.</td>
                                    </tr>
                                @endforelse
                            </tbody>
    
                        </table>
                        {{ $autors->links() }}
                    </div>
                </div>
                
                @endslot
            @endcomponent

        </div>
    </div>
</div>

<script>
        const autors = [
            {nombre: 'Axel Marañes'},
            {nombre: 'Franco Marañes'},
            {nombre: 'Dario Marañes'},
            {nombre: 'Gabriela Larrabeitía'},
            {nombre: 'Gustavo Marañes'},
        ]
        const formulario = document.querySelector('#formulario');
        const boton = document.querySelector('#boton');
        const resultado = document.querySelector('#resultado');

        const filtrar = ()=>{
            //console.log(formulario.value);

            resultado.innerHTML = '';
            const texto = formulario.value.toLowerCase();

            for(let autor of autors){
                let nombre = autor.nombre.toLowerCase();
                if(nombre.indexOf(texto) !== -1){
                    resultado.innerHTML += `
                    <li>${autor.nombre}</li>
                    `
                }
            }

            if(resultado.innerHTML === ''){
                resultado.innerHTML += `
                    <li>Autor no encontrado...</li>
                    `
            }
        }

        //boton.addEventListener('click', filtrar);

        formulario.addEventListener('keyup', filtrar)

        filtrar();
</script>

@endsection

