@extends('layouts/index')
@section('main')

 {{ $errors->first()}}
 
			<h2>Modificar Accion</h2>
			{{Form::model($accion)}}
				<p>
					{{Form::label('id','Id de la accion')}}
					{{Form::text('id')}}
				</p>
				<p>
					{{Form::label('nombre','Accion')}}
					{{Form::text('nombre')}}
				</p>
				
				<p>
					{{Form::submit('Aceptar')}}
				</p>				
			{{Form::close()}}

@stop
