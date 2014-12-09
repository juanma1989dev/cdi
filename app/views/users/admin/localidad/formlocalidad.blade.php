@extends('layouts/index')
@section('main')
	
	<h2>Agregar Localidades</h2>
			<ul class="info"></ul>
		{{Form::open(['id'=>'formLocalidades']) }}
				<p>
					{{Form::label('id','ingresa el id')}}
					{{Form::text('id')}}
				</p>
				<p>
					{{Form::label('localidad','Ingresa la localidad')}}
					{{Form::text('localidad')}}
				</p>
				<p>
					{{Form::submit('Aceptar')}}
				</p>
				<p>
					{{HTML::link('#','Cancelar',['id'=>'cancela'])}}	
				</p>
		{{Form::close()}}

			{{HTML::link('#','Agregar Localidad',['id'=>'oculta'])}}

			<h2>Visualizar localidades</h2>
	
				<table border="2" id="tablaLocalidad">

				@foreach ($localidades as $localidad ) 
						<tr>
							<td>{{$localidad->id}}</td>
							<td>{{$localidad->nombre}}</td>
							<td>{{HTML::link('/admin/localidad/'.$localidad->id, 'Editar')}}</td>
							<td>{{HTML::link('/admin/localidad'.$localidad->id.'/eliminar','Eliminar', ['class' => 'elimina','data-id'=> $localidad->id])}}</td>
						</tr>
						
					@endforeach
							
				</table>
				<template id='filaLocalidad-template'>
					<tr>
						<td>@{{id}}</td>
						<td>@{{localidad}}</td>
						<td><a href="@{{urlEdit}}">Editar</a></td>					
						<td><a href="#"  data-id="@{{id}}" class="elimina">Eliminar</a></td>					
					</tr>
				</template>

{{HTML::link('/admin','Regresar al panel')}}

@section('scripts')

	{{HTML::script('js/localidad/localidad.js')}}	
	
@stop
@stop