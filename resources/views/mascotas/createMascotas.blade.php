@extends('layouts.windmill')
@section('contenido')


<!-- Principio-->
<h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
             Ingresa los datos de tu mascota </h4>
<div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

<!-- Principio-->

<form action="{{route('mascotas.store')}}" method="POST">
    @csrf
    <lable class="block text-sm">
    <span class="text-gray-700 dark:text-gray-400">  Nombre: </span> 
   
    <br>
    <input type="text" name="nombre" value="{{old('nombre')}}"
    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
    </lable>

    
        @error('nombre')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror

    <br>
    <lable class="block text-sm">
     <span class="text-gray-700 dark:text-gray-400">  Edad: </span> 
   
     <br>
    <input type="number" name="edad" value="{{old('edad')}}"
    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
    </lable>

    
        @error('edad')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror

     <br>
    <lable class="block text-sm">
      <span class="text-gray-700 dark:text-gray-400"> Tipo animal: </span> 
    
     <br>
    <input type="text" name="tipo_animal" value="{{old('tipo_animal')}}"
    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
    </lable><br>

    
        @error('tipo_animal')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror

     <br>
    <lable class="block text-sm">
    <span class="text-gray-700 dark:text-gray-400"> Raza: </span> 
    
     <br>
   <input type="text" name="raza" value="{{old('raza')}}"
   class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
    </lable><br>

    
        @error('raza')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror

     <br>
    <lable class="block text-sm">
     <span class="text-gray-700 dark:text-gray-400">  Ingrese su id de cliente: </span>
   
     <br>
   <input type="number" name="cliente_id" value="{{old('cliente_id')}}"
   class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
    </lable><br>

    
        @error('cliente_id')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror

    <button type="submit"
    class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
    Agendar una cita</button>

   
</form>

@endsection
