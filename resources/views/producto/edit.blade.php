
@extends('layouts.app')
@section('content')
<h4 class="bg-dark-write">REGITRO DE PROVEEDORES</h4>
<form action="{{route('producto.update',$producto->pro_id)}}" method="POST">
  @csrf
  
    <div class="mb-3 row">
    <label   for="staticNombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
      <input value="{{$producto->pro_nombre}}" type="text" name="pro_nombre"  id="pro_nombre">
    </div>
  </div>
    <div class="mb-3 row">
    <label  for="staticApellido" class="col-sm-2 col-form-label">Precio</label>
    <div class="col-sm-10">
      <input value="{{$producto->pro_precio}}" type="text" name="pro_precio" id="pro_precio">
    </div>
  </div>
    <div class="mb-3 row">
                  <label for="">PROVEEDOR</label>
                  <select name="prov_id" id="prov_id" class="form-control">
                    
                     
                     @foreach($proveedor as $p)
                         <option  value="{{$p->prov_id}}" >{{$p->prov_nombre}}</option>
                     @endforeach
                  </select>
                
            </div>
  

  <button class="btn btn-success">Guardar</button> 
</form>
@endsection