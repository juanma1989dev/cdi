@extends('layouts/index')
@section('main')
	
	<h2>Agregar Lengua</h2>

	{{Form::open(['id'=>'formPrograma'])}}
		<p>
			{{Form::label('id','Identificador del programa ')}}
		   {{Form::text('id')}}
		</p>
		<p>
			{{Form::label('nombre','Nombre del programa ')}}
		   {{Form::text('nombre')}}
		</p>	
		<p>
			{{Form::submit('Aceptar')}}
		</p>
		<p>
			{{HTML::link('#','Cancelar',['id'=>'cancela'])}}
	{{Form::close()}}



	{{HTML::link('#','Agregar programa',['id'=>'oculta'])}}



	<h2>Visualizar Lengua</h2>

	<table border="2" id="tablaPrograma">

			@foreach($programas as $programa)
				<tr>
					<td>{{$programa->id}}</td>
					<td>{{$programa->nombre}}</td>
					<td>{{HTML::link('/admin/programas/'.$programa->id,'Editar')}}</td>
					<td>{{HTML::link('/admin/programas/'.$programa->id.'/eliminar','Eliminar',['class'=>'elimina','data-id'=> $programa->id])}}</td>
				</tr>
			@endforeach	
	</table>

<template id='filaPrograma-template'>
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
	{{HTML::script('js/catalogos/programas.js')}}
@stop

