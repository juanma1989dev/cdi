@extends('layouts/index')
@section('main')

 {{ $errors->first()}}
 
			<h2>Modificar Dependencia</h2>
			{{Form::model($dependencia)}}
				<p>
					{{Form::label('id','Id de la Dependencia')}}
					{{Form::text('id')}}
				</p>
				<p>
					{{Form::label('nombre','Dependencia')}}
					{{Form::text('nombre')}}
				</p>
				
				<p>
					{{Form::submit('Aceptar')}}
				</p>				
			{{Form::close()}}

@stop
