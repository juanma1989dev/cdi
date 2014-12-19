@extends('layouts/index')
@section('main')
	
	<h2>Agregar REgion indigena</h2>

	{{Form::open(['id'=>'formIndigena'])}}
		<p>
			{{Form::label('id','Identificador l region indigena')}}
		   {{Form::text('id')}}
		</p>
		<p>
			{{Form::label('nombre','Nombre de la region indigena')}}
		   {{Form::text('nombre')}}
		</p>	
		<p>
			{{Form::submit('Aceptar')}}
		</p>
		<p>
			{{HTML::link('#','Cancelar',['id'=>'cancela'])}}
	{{Form::close()}}



	{{HTML::link('#','Agregar region indigena ',['id'=>'oculta'])}}



	<h2>Visualizar regiones indigenas</h2>

	<table border="2" id="tablaRegionIndigena">

			@foreach($regindigenas as $regindigena)
				<tr>
					<td>{{$regindigena->id}}</td>
					<td>{{$regindigena->nombre}}</td>
					<td>{{HTML::link('/admin/regionindigena/'.$regindigena->id,'Editar')}}</td>
					<td>{{HTML::link('/admin/regionindigena/'.$regindigena->id.'/eliminar','Eliminar',['class'=>'elimina','data-id'=> $regindigena->id])}}</td>
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
	{{HTML::script('js/catalogos/regIndigena.js')}}
@stop

