@extends('layouts/index')
@section('main')
			<h2>Agregar estados</h2>
			{{Form::open(['id'=>'formEdo'])}}
				<p>
					{{Form::Label('id','Clave :')}}
					{{Form::text('id')}}
				</p>
				<p>
					{{Form::Label('nombre','Estado :')}}
					{{Form::text('nombre')}}
				</p>
				<p>
					{{Form::submit('Aceptar')}}
				</p>
				<p>{{HTML::link('cancela','Cancelar',['id'=>'cancela'])}}</p>

				
			{{Form::close()}}



		{{HTML::link('#','Agregar Estado',['id'=>'oculta'])}}




		<h2>Estados</h2>
		<table border="2" id="tablaEstado">

			@foreach($estados as $estado)
				<tr>
					<td>{{$estado->id}}</td>
					<td>{{$estado->nombre}}</td>
					<td>{{HTML::link('/admin/estado/'.$estado->id,'Editar')}}</td>
					<td>{{HTML::link('/admin/estado/'.$estado->id.'/eliminar','Eliminar',['class'=>'elimina','data-id'=> $estado->id])}}</td>
				</tr>
			@endforeach
		</table>

			<template id='filaEstado-template'>
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
	{{HTML::script('js/estados/estado.js')}}
	
@stop

