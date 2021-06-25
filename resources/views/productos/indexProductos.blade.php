@extends('layouts.plantilla')

@section('title','Productos')

@section('content')
 <h1>PRODUCTOS PRUEBA 123</h1>

 <table border="1">
    <thread>
        <tr>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Descripcion</th>
            <th>Categoria</th>
            <th>Precio</th>
        </tr>
</thread>

  @foreach($productos as $prod)
    <tr>

    <td>
    <a href="/productos/{{$prod->nombre}}">
       {{ $prod -> nombre }}
    </a>
    </td>
     <td>{{ $prod->marca }}</td>
      <td>{{ $prod->descripcion }}</td>
       <td>{{ $prod->categoria }}</td>
        <td>{{ $prod->precio }}</td>
        </tr>
    @endforeach

@endsection
