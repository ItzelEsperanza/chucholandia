@extends('layouts.windmill')
@section('contenido')

            <h4
              class="mb-4 text-lg font-semibold text-green-600 dark:text-green-300"
            >
            GALERIA
            </h4>

    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

<h1>ID Cliente: {{$clientes->id}}</h1> <br>
<p><strong>Nombre: </strong>{{$clientes->nombre}}</p> <br>
<p><strong>Apellido: </strong>{{$clientes->apellido}}</p> <br>
<p><strong>Telefono: </strong>{{$clientes->telefono}}</p><br>
<p><strong>Email: </strong>{{$clientes->email}}</p>

<br>
<button type="submit"
    class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
 <a href="{{route('mascotas.create')}}">Siguinte</a>
 </button>

 </div>
@endsection
