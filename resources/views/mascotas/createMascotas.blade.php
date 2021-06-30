@extends('layouts.plantilla')

@section('title','Agregar mascota')

@section('content')
<h1>"En esta pagian podras agregar los datos de tu mascota" </h1>



<form action="{{route('mascotas.store')}}" method="POST">
    @csrf
    <lable>
    Nombre:
    <br>
    <input type="text" name="nombre">
    </lable>

    <br>
    <lable>
    Edad:
     <br>
    <input type="number" name="edad">
    </lable>

     <br>
    <lable>
    Tipo animal:
     <br>
    <input type="text" name="tipo_animal">
    </lable><br>

     <br>
    <lable>
    Raza:
     <br>
   <input type="text" name="raza">
    </lable><br>

     <br>
    <lable>
    Ingrese su id de cliente:
     <br>
   <input type="number" name="cliente_id">
    </lable><br>

    <button type="submit">Agendar una cita</button>

   
</form>

@endsection
