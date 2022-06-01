@extends('layouts.app')
@section('content')
<script src="{{asset('js/usuarios.js')}}"></script>
<h4 class="bg-dark-write">REGISTRO DE USUARIOS</h4>
<form action="{{route('usuarios.update',$users->usu_id)}}" method="POST" onsubmit=" return validar()">
	@csrf
  
	  <div class="mb-3 row">
    <label   for="staticNombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
      <input value="{{$users->usu_nombre}}" type="text" name="usu_nombre"  id="usu_nombre">
    </div>
  </div>
    <div class="mb-3 row">
    <label  for="staticApellido" class="col-sm-2 col-form-label">Apellido</label>
    <div class="col-sm-10">
      <input value="{{$users->usu_apellido}}" type="text" name="usu_apellido" id="usu_apellido">
    </div>
  </div>
    <div class="mb-3 row">
    <label  for="staticCedula" class="col-sm-2 col-form-label">Cedula</label>
    <div class="col-sm-10">
      <input value="{{$users->usu_cedula}}" type="number" name="usu_cedula"  id="usu_cedula">
    </div>
  </div>
	  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input value="{{$users->email}}"  type="email" name="email" id="email">
    </div>
  </div>
  

  <button  type="submit" class="btn btn-success">Guardar</button> 
</form>
@endsection

