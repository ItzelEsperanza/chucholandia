@extends('layouts.windmill')
@section('contenido')

            <h4
              class="mb-4 text-lg font-semibold text-green-600 dark:text-green-300"
            >
            Mascota registrada
            </h4>

    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

<h1>Mascota: {{$mascotas->nombre}}</h1> <br>
<p><strong>ID Mascota: </strong>{{$mascotas->id}}</p> <br>
<p><strong>Edad: </strong>{{$mascotas->edad}}</p> <br>
<p><strong>Tipo de animal: </strong>{{$mascotas->tipo_animal}}</p><br>
<p><strong>Raza: </strong>{{$mascotas->raza}}</p><br>
<p><strong>ID del cliente dueño: </strong>{{$mascotas->cliente_id}}</p>

<br>
<button type="submit"
    class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
 <a href="{{route('citas.create')}}">Siguiente</a>
 </button>

 </div>
@endsection
