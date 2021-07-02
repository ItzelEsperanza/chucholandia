@extends('layouts.windmill')
@section('contenido')

<!-- Principio-->
<h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
             Editar producto </h4>
<div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

<!-- Principio-->


<form action="{{route('productos.update',$productos)}}" method="POST">
    @csrf
    @method('put')
    <lable class="block text-sm">
   <span class="text-gray-700 dark:text-gray-400">  Nombre: </span>
    <br>
    <input type="text" name="nombre" value="{{$productos->nombre}}"
    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
    </lable>

        @error('nombre')
            <small class="text-xs text-red-600 dark:text-red-400">*{{$message}}</small>
            <br>
            @enderror

    <br>
    <lable class="block text-sm">
   <span class="text-gray-700 dark:text-gray-400">   Marca: </span> 
     <br>
    <input type="text" name="marca" value="{{$productos->marca}}"
    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
    </lable>

         @error('marca')
            <small class="text-xs text-red-600 dark:text-red-400">*{{$message}}</small>
            <br>
            @enderror

     <br>
    <lable class="block text-sm">
   <span class="text-gray-700 dark:text-gray-400">   Descripcion: </span> 
     <br>
    <textarea name="descripcion" rows='5' class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
    {{$productos->descripcion}}</textarea>
    </lable><br>

        @error('descripcion')
            <small class="text-xs text-red-600 dark:text-red-400">*{{$message}}</small>
            <br>
            @enderror

     <br>
    <lable class="block text-sm">
   <span class="text-gray-700 dark:text-gray-400"> Categoria: </span>  
     <br>
   <input type="text" name="categoria" value="{{$productos->categoria}}" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
    </lable><br>

        @error('categoria')
            <small class="text-xs text-red-600 dark:text-red-400">*{{$message}}</small>
            <br>
            @enderror

     <br>
    <lable class="block text-sm">

    <span class="text-gray-700 dark:text-gray-400">  Precio: </span> 
     <br>
     <input type="number" name="precio" value="{{$productos->precio}}" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
    </lable><br>

        @error('precio')
            <small class="text-xs text-red-600 dark:text-red-400">*{{$message}}</small>
            <br>
            @enderror



    <button type="submit"  class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
    Actualizar formulario</button>

   
</form>

@endsection
