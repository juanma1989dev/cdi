@extends('layouts/index')
@section('main')

 {{ $errors->first()}}
 
			<h2>Modificar Programa</h2>
			{{Form::model($programa)}}
				<p>
					{{Form::label('id','Id del Programa')}}
					{{Form::text('id')}}
				</p>
				<p>
					{{Form::label('nombre','Programa')}}
					{{Form::text('nombre')}}
				</p>
				
				<p>
					{{Form::submit('Aceptar')}}
				</p>				
			{{Form::close()}}

@stop
