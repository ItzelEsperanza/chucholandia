@extends('layouts.plantilla')

@section('title','Agregar cliente')

@section('content')
<h1>"En esta pagian podras agregar tus datos" </h1>



<form action="{{route('clientes.store')}}" method="POST">
    @csrf
    <lable>
    Nombre:
    <br>
    <input type="text" name="nombre" value="{{old('nombre')}}">
    </lable>

        @error('nombre')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror

    <br>
    <lable>
    Apellido:
     <br>
    <input type="text" name="apellido" value="{{old('apellido')}}">
    </lable>

         @error('apellido')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror

     <br>
    <lable>
    Telefono:
     <br>
    <input type="text" name="telefono" value="{{old('telefono')}}">
    </lable><br>

         @error('telefono')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
     <br>
    <lable>
    Email:
     <br>
   <input type="text" name="email" value="{{old('email')}}">
    </lable><br>

         @error('email')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror

    <button type="submit">Siguiente</button>

   
</form>

@endsection
