@extends('layouts/index')

@section('main')

	
	<h2>Agregar Municipios</h2>
			<ul class="info"></ul>
		{{Form::open(['id'=>'formMuni']) }}
				<p>
					{{Form::label('id','Clave Municipio')}}
					{{Form::text('id')}}
				</p>
				<p>
					{{Form::label('nombre','Municipio')}}
					{{Form::text('nombre')}}
				</p>
				<p>
					{{Form::label('ccdi','CCDI')}}
					{{Form::text('ccdi')}}
				</p>
				<p>
					{{Form::label('cnch','CNCH')}}
					{{Form::text('cnch')}}
				</p>
				
				<p>
					{{Form::submit('Aceptar')}}
				</p>
				<p>
					{{HTML::link('#','Cancelar',['id'=>'cancela'])}}	
				</p>
			{{Form::close()}}





			{{HTML::link('#','Agregar localidad',['id'=>'oculta'])}}




			<h2>Visualizar Municipios</h2>
	
				<table border="2" id="tablaMunicipio">

					@foreach($municipios as $municipio) 
						<tr>
							<td>{{$municipio->id}}</td>
							<td>{{$municipio->nombre}}</td>
							<td>{{$municipio->ccdi}}</td>
							<td>{{$municipio->cnch}}</td>
							<td>{{HTML::link('/admin/municipio/'.$municipio->id,'Editar')}}</td>
							<td>{{HTML::link('admin/municipio/'.$municipio->id.'/eliminar','Eliminar', ['class' => 'elimina','data-id'=> $municipio->id])}}</td>
						</tr>
						
					@endforeach
							
				</table>
				<template id='filaMunicipio-template'>
					<tr>
						<td>@{{id}}</td>
						<td>@{{nombre}}</td>
						<td>@{{ccdi}}</td>
						<td>@{{cnch}}</td>
						<td><a href="@{{urlEdit}}">Editar</a></td>					
						<td><a href="#"  data-id="@{{id}}" class="elimina">Eliminar</a></td>					
					</tr>
				</template>

{{HTML::link('/admin','Regresar al panel')}}
@stop

@section('scripts')
	{{HTML::script('js/municipio/municipio.js')}}
@stop


