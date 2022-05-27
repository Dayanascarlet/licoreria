@extends('layouts.app')
@section('content')

<h1>FACTURA</h1>
<a href="{{route('factura.create')}}" class="btn btn-primary"  >Nueva</a>
<a href="{{route('reporte')}}" class="btn btn-primary"  >Reporte</a>
<div class="container">
	<table class="table">
		<tr>
			<th># Factura</th>
			
			<th>Fecha</th>
			<th>Clientes</th>
			<th>...</th>
		</tr>
		@foreach($factura as $f)
		<tr>
			
			<td>{{$f->fac_id}}</td>
			<td>{{$f->fac_fecha}}</td>
			<td>{{$f->cli_nombre}}</td>
			<td>
				<a class="btn btn-info btn-sm" href="{{route('factura.edit',$f->fac_id)}}">Editar</a>
				<a href="{{route('factura.pdf',$f->fac_id)}}" class="btn btn-danger btn-sm">PDF</a>
			</td>
		</tr>
		@endforeach

	</table>
</div>

@endsection