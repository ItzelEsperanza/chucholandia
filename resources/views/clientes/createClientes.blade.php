@extends('layouts.plantilla')

@section('title','Agregar cliente')

@section('content')
<h1>"En esta pagian podras agregar tus datos" </h1>



<form action="{{route('clientes.store')}}" method="POST">
    @csrf
    <lable>
    Nombre:
    <br>
    <input type="text" name="nombre">
    </lable>

    <br>
    <lable>
    Apellido:
     <br>
    <input type="text" name="apellido">
    </lable>

     <br>
    <lable>
    Telefono:
     <br>
    <input type="text" name="telefono">
    </lable><br>

     <br>
    <lable>
    Email:
     <br>
   <input type="text" name="email">
    </lable><br>

    <button type="submit">Siguiente</button>

   
</form>

@endsection
