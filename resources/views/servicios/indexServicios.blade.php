@extends('layouts.windmill')
@section('contenido')


    <!-- Big section cards -->
            <h4
              class="mb-4 text-lg font-semibold text-green-600 dark:text-green-300"
            >
             Servicios Veterinaria Chucholandia
            </h4>

            @foreach($servicios as $servicio)
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                   {{$servicio->nombre}}
                  </p>

              <p class="text-sm text-gray-600 dark:text-gray-400">
               {{$servicio->descripcion }}
               <br>
               {{ $servicio->precio }}
              </p>
            </div>

             @endforeach



             
@endsection
