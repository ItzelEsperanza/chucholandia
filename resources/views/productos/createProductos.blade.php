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
    <input type="text" name="nombre">
    </lable>

    <br>
    <lable>
    Marca:
     <br>
    <input type="text" name="marca">
    </lable>

     <br>
    <lable>
    Descripcion:
     <br>
    <textarea name="descripcion" rows='5'> </textarea>
    </lable><br>

     <br>
    <lable>
    Categoria:
     <br>
   <input type="text" name="categoria">
    </lable><br>

     <br>
    <lable>

    Precio:
     <br>
     <input type="number" name="precio">
    </lable><br>



    <button type="submit">Enviar formulario</button>

   
</form>

@endsection
