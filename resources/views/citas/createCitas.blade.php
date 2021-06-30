@extends('layouts.plantilla')

@section('title','Citas')

@section('content')
<h1>"En esta pagian podras agendar tu cita"</h1>


<form action="{{route('citas.store')}}" method="POST">
    @csrf

     <lable>
    Ingrese su id de cliente:
    <br>
    <input type="number" name="cliente_id">
    </lable>

     <lable>
     <br>
    Ingrese el id de su mascota:
    <br>
    <input type="number" name="mascota_id">
    </lable>

    <lable>
     <br>
   Seleccione una Fecha y hora:
  <input type="datetime-local" name="fecha_hora">
  </lable>

    <br>
    <lable>
    Selecciona un servicio:
    <br>
    <select name="servicio">
  <option value="1">Corte de pelo</option>
  <option value="2">Consulta</option>
  <option value="3">Baño</option>
  <option value="4">Baño y corte de pelo</option>
  <option value="5">Hotel para perros y gatos</option>
  <option value="6">Vacunación</option>
  <option value="7">Rayos X</option>
  <option value="8">Ecografía</option>
   <option value="9">Adiestramiento Canino</option>
</select>
     </lable>




    <button type="submit">Siguiente</button>

   
</form>

@endsection
