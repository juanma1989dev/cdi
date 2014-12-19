@extends('layouts/index')
@section('main')

 {{ $errors->first()}}
 
			<h2>Modificar Dependencia</h2>
			{{Form::model($ubicacion)}}
				<p>
					{{Form::label('id','Id de la ubicacion')}}
					{{Form::text('id')}}
				</p>
				<p>
					{{Form::label('nombre','Ubicacion')}}
					{{Form::text('nombre')}}
				</p>
				
				<p>
					{{Form::submit('Aceptar')}}
				</p>				
			{{Form::close()}}

@stop
