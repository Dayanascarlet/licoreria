@extends('layouts.app')
@section('content')
<center>
<h2 class="bg-white text-black">Lista de cliente</h2>
<a class="btn btn-success" href="{{route('cliente.create')}}" >NUEVO</a>
</center>
	<table class="table">
		<th> # </th>
		<th> Nombre </th>
		<th> Apellido </th>
		<th> Cedula </th>	
		<th> Email </th>
		<th> Telefono </th>
	@foreach ( $cliente as $c);
	<tr>
		<td>{{$loop->iteration}}</td>
		<td>{{$c->cli_nombre}}</td>
		<td>{{$c->cli_apellido}}</td>
		<td>{{$c->cli_cedula}}</td>
		<td>{{$c->cli_email}}</td>
		<td>{{$c->cli_telefono}}</td>
		    <td>
		    	<a href="{{route('cliente.edit',$c->cli_id)}}" class="btn btn-info sm">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
			 	<path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
			</svg>
			</a>
		    	 
		     	 <a href=""class="btn btn-danger">
		    <form action="{{route('cliente.destroy',$c->cli_id)}}"method="post"onsubmit="return confirm('¿Desea eliminar?')">
		    	@csrf
		    	<button >Eliminar </button>
		    
		    </form>
		</a>
		</td> 
		
	</tr>
	@endforeach
	</table>

@endsection