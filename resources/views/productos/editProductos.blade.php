@extends('layouts.plantilla')

@section('title','Editar producto')

@section('content')
<h1>"En esta pagian podras editar un producto" </h1>

{{route('productos.store')}}

<form action="{{route('productos.update',$productos)}}" method="POST">
    @csrf
    @method('put')
    <lable>
    Nombre:
    <br>
    <input type="text" name="nombre" value="{{$productos->nombre}}">
    </lable>

        @error('nombre')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror

    <br>
    <lable>
    Marca:
     <br>
    <input type="text" name="marca" value="{{$productos->marca}}">
    </lable>

         @error('marca')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror

     <br>
    <lable>
    Descripcion:
     <br>
    <textarea name="descripcion" rows='5'>{{$productos->descripcion}}</textarea>
    </lable><br>

        @error('descripcion')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror

     <br>
    <lable>
    Categoria:
     <br>
   <input type="text" name="categoria" value="{{$productos->categoria}}">
    </lable><br>

        @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror

     <br>
    <lable>

    Precio:
     <br>
     <input type="number" name="precio" value="{{$productos->precio}}">
    </lable><br>

        @error('precio')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror



    <button type="submit">Actualizar formulario</button>

   
</form>

@endsection
