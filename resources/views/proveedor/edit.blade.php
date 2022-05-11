@extends('layouts.app')
@section('content')
<h4 class="bg-dark-write">REGITRO DE PROVEEDORES</h4>
<form action="{{route('proveedor.update',$proveedor->prov_id)}}" method="POST">
	@csrf
  
	  <div class="mb-3 row">
    <label   for="staticNombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
      <input value="{{$proveedor->prov_nombre}}" type="text" name="prov_nombre"  id="prov_nombre">
    </div>
  </div>
    <div class="mb-3 row">
    <label  for="staticApellido" class="col-sm-2 col-form-label">Apellido</label>
    <div class="col-sm-10">
      <input value="{{$proveedor->prov_apellido}}" type="text" name="prov_apellido" id="prov_apellido">
    </div>
  </div>
    <div class="mb-3 row">
    <label  for="staticCedula" class="col-sm-2 col-form-label">Cedula</label>
    <div class="col-sm-10">
      <input value="{{$proveedor->prov_cedula}}" type="text" name="prov_cedula"  id="prov_cedula">
    </div>
  </div>
	  <div class="mb-3 row">
    <label for="staticRuc" class="col-sm-2 col-form-label">Ruc</label>
    <div class="col-sm-10">
      <input value="{{$proveedor->prov_ruc}}"  type="text" name="prov_ruc" id="prov_ruc">
    </div>
  </div>
  

  <button class="btn btn-success">Guardar</button> 
</form>
@endsection
