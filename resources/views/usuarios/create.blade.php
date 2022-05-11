@extends('layouts.app')

@section('content')
<center>
	<h4 class="bg-dark text-white ">REGISTRO DE USUARIOS</h4>
	</center>
	<form action="{{route('usuarios.store')}}" method="POST" >
		@csrf
 <div class="mb-3 row">
    <label   for="staticNombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" name="usu_nombre"  id="usu_nombre" class=" @error('usu_nombre') is-invalid @enderror" name="usu_nombre" value="{{ old('usu_nombre') }}" required autocomplete="email" autofocus>


                  @error('usu_nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    </div>
  </div>
    <div class="mb-3 row">
    <label  for="staticApellido" class="col-sm-2 col-form-label">Apellido</label>
    <div class="col-sm-10">
      <input type="text" name="usu_apellido" id="usu_apellido">
    </div>
  </div>
    <div class="mb-3 row">
    <label  for="staticCedula" class="col-sm-2 col-form-label">Cedula</label>
    <div class="col-sm-10">
      <input type="number" name="usu_cedula"  id="usu_cedula">
    </div>
  </div>
    <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input   type="text" name="email" id="email">
    </div>
  </div>
  <div class="mb-3 row">
    <label  for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input  type="password" name="password"  id="password">
    </div>
  </div>
  <button class="btn btn-success">Guardar</button> 
</form> 
        
	@endsection

		




	  