@extends('layouts/index')
@section('main')
	
	<h2>Agregar Region de Oaxaca</h2>

	{{Form::open(['id'=>'formRegOax'])}}
		<p>
			{{Form::label('id','Identificador de la region de oaxaqueña')}}
		   {{Form::text('id')}}
		</p>
		<p>
			{{Form::label('nombre','Nombre de la region oaxaqueña')}}
		   {{Form::text('nombre')}}
		</p>	
		<p>
			{{Form::submit('Aceptar')}}
		</p>
		<p>
			{{HTML::link('#','Cancelar',['id'=>'cancela'])}}
	{{Form::close()}}



	{{HTML::link('#','Agregar region indigena ',['id'=>'oculta'])}}



	<h2>Visualizar regiones oaxaqueñas</h2>

	<table border="2" id="tablaRegOax">

			@foreach($regoaxaqueñas as $regoaxaqueña)
				<tr>
					<td>{{$regoaxaqueña->id}}</td>
					<td>{{$regoaxaqueña->nombre}}</td>
					<td>{{HTML::link('/admin/regionindigena/'.$regoaxaqueña->id,'Editar')}}</td>
					<td>{{HTML::link('/admin/regionindigena/'.$regoaxaqueña->id.'/eliminar','Eliminar',['class'=>'elimina','data-id'=> $regoaxaqueña->id])}}</td>
				</tr>
						@endforeach	
	</table>

<template id='filaRegindigena-template'>
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
	{{HTML::script('js/catalogos/regOax.js')}}
@stop

