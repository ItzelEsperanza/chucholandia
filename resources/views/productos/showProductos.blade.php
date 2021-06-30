@extends('layouts.plantilla')

@section('title','Resumen de Producto')

@section('content')

<h1>Producto: {{$productos->nombre}}</h1> <br>
<p><strong>Marca: </strong>{{$productos->marca}}</p> <br>
<p><strong>Descripcion: </strong>{{$productos->descripcion}}</p> <br>
<p><strong>Categoria: </strong>{{$productos->categoria}}</p><br>
<p><strong>Precio: </strong>{{$productos->precio}}</p>

@endsection
