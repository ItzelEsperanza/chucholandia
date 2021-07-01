@extends('layouts.windmill')
@section('contenido')


<!-- Registro opc-->

<div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

<h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
             Tu cita ha sido registrada exitosamente </h4>

    <br>
    <button type="submit"
    class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-yellow">
    <a href="{{route('citas.create')}}"> Regresar a citas </a></button>
<br><br>
</div>
@endsection
