@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-4 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left">
                        <h3>Listado de Autores</h3><br>
                    </div>
                    <div class="btn-group">
                        <a href="{{ route('autor.create') }}" class="btn btn-dark">Añadir un nuevo Autor</a>
                    </div>
                    
                    <div class="mt-3">
                        <input type="text" id="formulario" class="form-control my-2">
                        <button class="btn btn-info mb-2" id="boton">Buscar</button>
                        <ul id="resultado">
                        </ul>
                    </div>
                </div>

                    <div class="table table-striped mt-5">
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
                                            <a href="{{ route('autor.show', $autor->id) }}"><i class="fas fa-eye"></i></a>
                                        
                                            <a href="{{ route('autor.edit', $autor->id) }}"><i class="fas fa-edit"></i></a>
                                       
                                            <form action="{{ route('autor.destroy', $autor->id)}}" method="post" class="d-inline"> 
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"><i class="fas fa-trash"></i></button>
                                        </td>                     
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">No hay registros cargados.</td>
                                    </tr>
                                @endforelse
                            </tbody>

                        </table>
                    </div>
                </div>
                {{ $autors->links() }}
            </div>
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

