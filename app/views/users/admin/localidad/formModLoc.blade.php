@extends('layouts/index')
@section('main')

 {{ $errors->first()}}
 
			<h2>Modificar Localidad</h2>
			{{Form::model($localidad)}}
				<p>
					{{Form::label('id','ID Localidad')}}
					{{Form::text('id')}}
				</p>
				<p>
					{{Form::label('localidad','Localidad')}}
					{{Form::text('nombre')}}
				</p>
				
				<p>
					{{Form::submit('Aceptar')}}
				</p>				
			{{Form::close()}}

@stop
