@extends('layouts.plantilla')

@section('title','Crear productos')

@section('content')
<h1>"En esta pagian podras crear un producto" </h1>

{{route('productos.store')}}

<form action="{{route('productos.store')}}" method="POST">
    @csrf
    <lable>
    Nombre:
    <br>
    <input type="text" name="nombre" value="{{old('nombre')}}">
    </lable>

        @error('nombre')
            <small class="text-xs text-red-600 dark:text-red-400">*{{$message}}</small>
            <br>
            @enderror

    <br>
    <lable>
    Marca:
     <br>
    <input type="text" name="marca" value="{{old('marca')}}">
    </lable>

         @error('marca')
            <small class="text-xs text-red-600 dark:text-red-400">*{{$message}}</small>
            <br>
            @enderror

     <br>
    <lable>
    Descripcion:
     <br>
    <textarea name="descripcion" rows='5'> {{old('descripcion')}} </textarea>
    </lable><br>

        @error('descripcion')
            <small class="text-xs text-red-600 dark:text-red-400">*{{$message}}</small>
            <br>
            @enderror

     <br>
    <lable>
    Categoria:
     <br>
   <input type="text" name="categoria" value="{{old('categoria')}}">
    </lable><br>

        @error('categoria')
            <small class="text-xs text-red-600 dark:text-red-400">*{{$message}}</small>
            <br>
            @enderror

     <br>
    <lable>

    Precio:
     <br>
     <input type="number" name="precio" value="{{old('cliente_id')}}">
    </lable><br>

        @error('precio')
            <small class="text-xs text-red-600 dark:text-red-400">*{{$message}}</small>
            <br>
            @enderror



    <button type="submit">Enviar formulario</button>

   
</form>

@endsection
