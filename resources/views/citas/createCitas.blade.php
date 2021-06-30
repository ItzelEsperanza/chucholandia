@extends('layouts.plantilla')

@section('title','Citas')

@section('content')
<h1>"En esta pagian podras agendar tu cita"</h1>


<form action="{{route('citas.store')}}" method="POST">
    @csrf

     <lable>
    Ingrese su id de cliente:
    <br>
    <input type="number" name="cliente_id" value="{{old('cliente_id')}}">
    </lable>

            @error('cliente_id')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror

     <lable>
     <br>
    Ingrese el id de su mascota:
    <br>
    <input type="number" name="mascota_id" value="{{old('mascota_id')}}">
    </lable>

            @error('mascota_id')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror

    <lable>
     <br>
   Seleccione una Fecha y hora:
  <input type="datetime-local" name="fecha_hora" value="{{old('fecha_hora')}}">
  </lable>


          @error('fecha_hora')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror

    <br>
    <lable>
    Selecciona un servicio:
    <br>
    <select name="servicio">
  

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
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
<br>

    <button type="submit">Siguiente</button>

   
</form>

@endsection
