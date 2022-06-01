@extends('layouts.app')

@section('content')
<script src="{{asset('js/proveedor.js')}}"></script>
<center>
  <h4 class="bg-dark text-white ">REGISTRO DE PROVEEDORES</h4>
  </center>
  <form action="{{route('proveedor.store')}}" method="POST" onsubmit=" return validar()" >
    @csrf
 <div class="mb-3 row">
    <label   for="staticNombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" name="prov_nombre"  id="prov_nombre">
    </div>
  </div>
    <div class="mb-3 row">
    <label  for="staticApellido" class="col-sm-2 col-form-label">Apellido</label>
    <div class="col-sm-10">
      <input type="text" name="prov_apellido" id="prov_apellido">
    </div>
  </div>
    <div class="mb-3 row">
    <label  for="staticCedula" class="col-sm-2 col-form-label">Cedula</label>
    <div class="col-sm-10">
      <input type="text" name="prov_cedula"  id="prov_cedula">
    </div>
  </div>
    <div class="mb-3 row">
    <label for="staticRuc" class="col-sm-2 col-form-label">ruc</label>
    <div class="col-sm-10">
      <input   type="text" name="prov_ruc" id="prov_ruc">
    </div>
  </div>
  
  <button type="submit" class="btn btn-success">Guardar</button> 
</form> 
        
  @endsection