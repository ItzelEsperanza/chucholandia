@extends('layouts.windmill')
@section('contenido')

            <h4
              class="mb-4 text-lg font-semibold text-green-600 dark:text-green-300"
            >
             Productos
            </h4>

    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

<p><strong>Producto: </strong>{{$productos->nombre}}</p> <br>
<p><strong>Marca: </strong>{{$productos->marca}}</p> <br>
<p><strong>Descripcion: </strong>{{$productos->descripcion}}</p> <br>
<p><strong>Categoria: </strong>{{$productos->categoria}}</p><br>
<p><strong>Precio: </strong>{{$productos->precio}}</p>

<br>
<button type="submit"
    class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
 <a href="{{route('productos.edit',$productos)}}">Editar producto</a>
 </button>


 <form action="{{route('productos.destroy',$productos)}}" method="POST">
 @csrf
 @method('delete')
 <br>

 <button type="submit"
    class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
 Eliminar producto
 </button>
 </form>

 <br>
 <button type="submit"
    class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
 <a href="{{route('productos.index')}}">Regresar a productos</a>
 </button>

 </div>
@endsection


