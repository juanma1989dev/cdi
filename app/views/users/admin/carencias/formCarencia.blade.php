@extends('layouts/index')
@section('main')
	
	<h2>Agregar Carencia</h2>

	{{Form::open(['id'=>'formCarencia'])}}
		<p>
			{{Form::label('id','Identificador de Carencia')}}
		   {{Form::text('id')}}
		</p>
		<p>
			{{Form::label('nombre','Nombre de la carencia')}}
		   {{Form::text('nombre')}}
		</p>	
		<p>
			{{Form::submit('Aceptar')}}
		</p>
		<p>
			{{HTML::link('#','Cancelar',['id'=>'cancela'])}}	
		</p>
	{{Form::close()}}



	{{HTML::link('#','Agregar Carencia',['id'=>'oculta'])}}



	<h2>Visualizar Carencias</h2>

	<table border="2" id="tablaCarencia">

			@foreach($carencias as $carencia)
				<tr>
					<td>{{$carencia->id}}</td>
					<td>{{$carencia->nombre}}</td>
					<td>{{HTML::link('/admin/carencias/'.$carencia->id,'Editar')}}</td>
					<td>{{HTML::link('/admin/carencias/'.$carencia->id.'/eliminar','Eliminar',['class'=>'elimina','data-id'=> $carencia->id])}}</td>
				</tr>
			@endforeach	
	</table>

<template id='filaCarencia-template'>
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
	{{HTML::script('js/catalogos/catalogos.js')}}
@stop

