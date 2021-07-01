@extends('layouts.windmill')
@section('contenido')

<h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
              Registro cliente </h4>
<div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">



<form action="{{route('clientes.store')}}" method="POST">
    @csrf
    <lable "block text-sm">
    <span class="text-gray-700 dark:text-gray-400"> Nombre:</span>
    <br>
    <input type="text" name="nombre" value="{{old('nombre')}}"
     class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
    </lable>

        @error('nombre')
            <small class="text-xs text-red-600 dark:text-red-400">*{{$message}}</small>
            <br>
            @enderror

    <br>
    <lable "block text-sm">
     <span class="text-gray-700 dark:text-gray-400">Apellido:</span>
   
     <br>
    <input type="text" name="apellido" value="{{old('apellido')}}"
     class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
    </lable>

         @error('apellido')
            <small class="text-xs text-red-600 dark:text-red-400">*{{$message}}</small>
            <br>
            @enderror

     <br>
    <lable "block text-sm">
     <span class="text-gray-700 dark:text-gray-400">Telefono:</span>
    
     <br>
    <input type="text" name="telefono" value="{{old('telefono')}}"
     class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
    </lable>

         @error('telefono')
            <small class="text-xs text-red-600 dark:text-red-400">*{{$message}}</small>
            <br>
            @enderror
     <br>
    <lable "block text-sm">
     <span class="text-gray-700 dark:text-gray-400">Email:</span>
     <br>
   <input type="text" name="email" value="{{old('email')}}"
    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
    </lable>

         @error('email')
            <small class="text-xs text-red-600 dark:text-red-400">*{{$message}}</small>
            <br>
            @enderror

            <br>
    <button type="submit"
    class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
    Siguiente</button>

   
</form>

@endsection


