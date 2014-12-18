@extends('layouts/index')
@section('main')
	
	<h2>Agregar Lengua</h2>

	{{Form::open(['id'=>'formLengua'])}}
		<p>
			{{Form::label('id','Identificador de la Lengua')}}
		   {{Form::text('id')}}
		</p>
		<p>
			{{Form::label('nombre','Nombre de la Lengua')}}
		   {{Form::text('nombre')}}
		</p>	
		<p>
			{{Form::submit('Aceptar')}}
		</p>
		<p>
			{{HTML::link('#','Cancelar',['id'=>'cancela'])}}
	{{Form::close()}}



	{{HTML::link('#','Agregar Lengua',['id'=>'oculta'])}}



	<h2>Visualizar Lengua</h2>

	<table border="2" id="tablaLengua">

			@foreach($lenguas as $lengua)
				<tr>
					<td>{{$lengua->id}}</td>
					<td>{{$lengua->nombre}}</td>
					<td>{{HTML::link('/admin/lenguas/'.$lengua->id,'Editar')}}</td>
					<td>{{HTML::link('/admin/lenguas/'.$lengua->id.'/eliminar','Eliminar',['class'=>'elimina','data-id'=> $lengua->id])}}</td>
				</tr>
			@endforeach	
	</table>

<template id='filaLengua-template'>
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
	{{HTML::script('js/catalogos/lenguas.js')}}
@stop

