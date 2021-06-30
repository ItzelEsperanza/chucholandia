@extends('layouts.plantilla')

@section('title','Agregar mascota')

@section('content')
<h1>"En esta pagian podras agregar los datos de tu mascota" </h1>



<form action="{{route('mascotas.store')}}" method="POST">
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
    Edad:
     <br>
    <input type="number" name="edad" value="{{old('edad')}}">
    </lable>

    
        @error('edad')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror

     <br>
    <lable>
    Tipo animal:
     <br>
    <input type="text" name="tipo_animal" value="{{old('tipo_animal')}}">
    </lable><br>

    
        @error('tipo_animal')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror

     <br>
    <lable>
    Raza:
     <br>
   <input type="text" name="raza" value="{{old('raza')}}">
    </lable><br>

    
        @error('raza')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror

     <br>
    <lable>
    Ingrese su id de cliente:
     <br>
   <input type="number" name="cliente_id" value="{{old('cliente_id')}}">
    </lable><br>

    
        @error('cliente_id')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror

    <button type="submit">Agendar una cita</button>

   
</form>

@endsection
