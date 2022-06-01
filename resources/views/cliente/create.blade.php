@extends('layouts.app')
@section('content')
<script src="{{asset('js/cliente.js')}}"></script>
<center>
  <h4 class="bg-dark text-white ">REGISTRO DE CLIENTES</h4>
  </center>
  <form action="{{route('cliente.store')}}" method="POST" onsubmit=" return validar()" >
    @csrf
 <div class="mb-3 row">
    <label   for="staticNombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" name="cli_nombre"  id="cli_nombre">
    </div>
  </div>
    <div class="mb-3 row">
    <label  for="staticApellido" class="col-sm-2 col-form-label">Apellido</label>
    <div class="col-sm-10">
      <input type="text" name="cli_apellido" id="cli_apellido">
    </div>
  </div>
    <div class="mb-3 row">
    <label  for="staticCedula" class="col-sm-2 col-form-label">Cedula</label>
    <div class="col-sm-10">
      <input type="number" name="cli_cedula"  id="cli_cedula">
    </div>
     </div>
    <div class="mb-3 row">
    <label  for="staticTelefono" class="col-sm-2 col-form-label">Telefono</label>
    <div class="col-sm-10">
      <input type="number" name="cli_telefono"  id="cli_telefono">
    </div>
  </div>
    <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input   type="email" name="cli_email" id="cli_email">
    </div>
  </div>
  
  <button type="submit" class="btn btn-success">Guardar</button> 
</form> 
        
  @endsection