@extends('layouts/index')
@section('main')
	
	<h2>Agregar Accion</h2>
			<ul class="info"></ul>
		{{Form::open(['id'=>'formAccion']) }}
				<p>
					{{Form::label('id','ingresa el id')}}
					{{Form::text('id')}}
				</p>
				<p>
					{{Form::label('nombre','Ingresa la accion')}}
					{{Form::text('nombre')}}
				</p>
				<p>
					{{Form::submit('Aceptar')}}
				</p>
				<p>
					{{HTML::link('#','Cancelar',['id'=>'cancela'])}}	
				</p>
		{{Form::close()}}

			{{HTML::link('#','Agregar Accion',['id'=>'oculta'])}}

			<h2>Visualizar Acciones</h2>
	
				<table border="2" id="tablaAccion">

				@foreach ($acciones as $accion ) 
						<tr>
							<td>{{$accion->id}}</td>
							<td>{{$accion->nombre}}</td>
							<td>{{HTML::link('/admin/acciones/'.$accion->id, 'Editar')}}</td>
							<td>{{HTML::link('/admin/acciones'.$accion->id.'/eliminar','Eliminar', ['class' => 'elimina','data-id'=> $accion->id])}}</td>
						</tr>
						
					@endforeach
							
				</table>
				<template id='filAccion-template'>
					<tr>
						<td>@{{id}}</td>
						<td>@{{nombre}}</td>
						<td><a href="@{{urlEdit}}">Editar</a></td>					
						<td><a href="#"  data-id="@{{id}}" class="elimina">Eliminar</a></td>					
					</tr>
				</template>

{{HTML::link('/admin','Regresar al panel')}}

@stop

@section('scripts')
	{{HTML::script('js/acciones/accion.js')}}	
@stop



