@extends('layouts/index')
@section('main')
	
	<h2>Agregar Dependencia</h2>

	{{Form::open(['id'=>'formDependencia'])}}
		<p>
			{{Form::label('id','Identificador de la Dependencia')}}
		   {{Form::text('id')}}
		</p>
		<p>
			{{Form::label('nombre','Nombre de la dependencia')}}
		   {{Form::text('nombre')}}
		</p>	
		<p>
			{{Form::submit('Aceptar')}}
		</p>
		<p>
			{{HTML::link('#','Cancelar',['id'=>'cancela'])}}
	{{Form::close()}}



	{{HTML::link('#','Agregar Dependencia',['id'=>'oculta'])}}



	<h2>Visualizar Dependencia</h2>

	<table border="2" id="tablaDependencia">

			@foreach($dependencias as $dependencia)
				<tr>
					<td>{{$dependencia->id}}</td>
					<td>{{$dependencia->nombre}}</td>
					<td>{{HTML::link('/admin/dependencias/'.$dependencia->id,'Editar')}}</td>
					<td>{{HTML::link('/admin/dependencias/'.$dependencia->id.'/eliminar','Eliminar',['class'=>'elimina','data-id'=> $dependencia->id])}}</td>
				</tr>
			@endforeach	
	</table>

<template id='filaDependencia-template'>
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
	{{HTML::script('js/catalogos/dependencia.js')}}
@stop

