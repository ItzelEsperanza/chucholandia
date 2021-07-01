@extends('layouts.windmill')
@section('contenido')


<!-- Registro opc-->

<div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

<h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
             ¿No cuentas con tu id de cliente o de tu mascota? ¡Registrate! </h4>


<br>
    <br>
    <button type="submit"
    class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
    <a href="{{route('clientes.create')}}"> Haz click para registrarte </a></button>
<br><br>
</div>
<!-- Principio-->


<!-- Principio-->
<h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
              Agenda una cita </h4>
<div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

<!-- Principio-->

<h1>Agenda uan cita para tu mascota, recuerda ingresar tu id de usuario y el id de tu mascota.</h1> <br>

 

<!-- Comienzo FROMULARIO-->

<form action="{{route('citas.store')}}" method="POST">
    @csrf

     <lable class="block text-sm">
     <span class="text-gray-700 dark:text-gray-400"> Ingrese su id de cliente:</span>
   
    <br>
    <input type="number" name="cliente_id" value="{{old('cliente_id')}}"
     class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">

     </lable>

            @error('cliente_id')
            <small class="text-xs text-red-600 dark:text-red-400">*{{$message}}</small>
            <br>
            @enderror

 <!-- seccion 2-->
     <lable class="block text-sm">
     <br>
    <span class="text-gray-700 dark:text-gray-400"> Ingrese el id de su mascota: </span> 
    <br>
    <input type="number" name="mascota_id" value="{{old('mascota_id')}}"
    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
    </lable>

            @error('mascota_id')
            <small class="text-xs text-red-600 dark:text-red-400">*{{$message}}</small>
            <br>
            @enderror

<!-- seccion 2-->
    <lable class="block text-sm">
     <br>
  <span class="text-gray-700 dark:text-gray-400">  Seleccione una Fecha y hora: </span> 
  
  <input type="datetime-local" name="fecha_hora" value="{{old('fecha_hora')}}"
  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
  </lable>

  
          @error('fecha_hora')
            <small class="text-xs text-red-600 dark:text-red-400">*{{$message}}</small>
            <br>
            @enderror


<!-- seccion 2-->
    <br>
    <lable class="block text-sm">
    <span class="text-gray-700 dark:text-gray-400"> Seleccione un servicio: </span> 
    <br>
    <select name="servicio"
    class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-multiselect focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
  

  <option value="1" {{ old('servicio') == 1 ? 'selected' : '' }}>Corte de pelo</option>
  <option value="2" {{ old('servicio') == 2 ? 'selected' : '' }}>Consulta</option>
  <option value="3" {{ old('servicio') == 3 ? 'selected' : '' }}>Baño</option>
  <option value="4" {{ old('servicio') == 4 ? 'selected' : '' }}>Baño y corte de pelo</option>
  <option value="5" {{ old('servicio') == 5 ? 'selected' : '' }}>Hotel para perros y gatos</option>
  <option value="6" {{ old('servicio') == 6 ? 'selected' : '' }}>Vacunación</option>
  <option value="7" {{ old('servicio') == 7 ? 'selected' : '' }}>Rayos X</option>
  <option value="8" {{ old('servicio') == 8 ? 'selected' : '' }}>Ecografía</option>
   <option value="9" {{ old('servicio') == 9 ? 'selected' : '' }}>Adiestramiento Canino</option>
    
</select>

     </lable>

             @error('servicio')
            <small class="text-xs text-red-600 dark:text-red-400">*{{$message}}</small>
            <br>
            @enderror
<br>

    <button type="submit"
     class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
     Guardar</button> 
   
</form>

</div>


@endsection
