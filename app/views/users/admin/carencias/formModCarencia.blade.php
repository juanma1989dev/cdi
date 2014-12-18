@extends('layouts/index')
@section('main')

 {{ $errors->first()}}
 
			<h2>Modificar Carencia</h2>
			{{Form::model($carencia)}}
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
