@extends('layouts/index')
@section('main')
	
	<h2>Agregar ubicacion</h2>

	{{Form::open(['id'=>'formUbicaciones'])}}
		<p>
			{{Form::label('id','Identificador de la ubicacion')}}
		   {{Form::text('id')}}
		</p>
		<p>
			{{Form::label('nombre','Nombre de la ubicacion')}}
		   {{Form::text('nombre')}}
		</p>	
		<p>
			{{Form::submit('Aceptar')}}
		</p>
		<p>
			{{HTML::link('#','Cancelar',['id'=>'cancela'])}}
	{{Form::close()}}



	{{HTML::link('#','Agregar ubicacion',['id'=>'oculta'])}}



	<h2>Visualizar Ubicacion</h2>

	<table border="2" id="tablaUbicacion">

			@foreach($ubicaciones as $ubicacion)
				<tr>
					<td>{{$ubicacion->id}}</td>
					<td>{{$ubicacion->nombre}}</td>
					<td>{{HTML::link('/admin/ubicaciones/'.$ubicacion->id,'Editar')}}</td>
					<td>{{HTML::link('/admin/ubicaciones/'.$ubicacion->id.'/eliminar','Eliminar',['class'=>'elimina','data-id'=> $ubicacion->id])}}</td>
				</tr>
			@endforeach	
	</table>

<template id='filaUbicacion-template'>
				<tr>
					<td>@{{id}}</td>
					<td>@{{nombre}}</td>
					<td><a href="@{{urlEdit}}">Editar</a></td>
					<td><a href="#" data-id='@{{id}}' class="elimina">Eliminar</a></td>
				</tr>
				
			</template>

			{{HTML::link('/admin','Regresar a panel ')}}

		@stop

@section('scripts')
	{{HTML::script('js/catalogos/ubicacion.js')}}
@stop

