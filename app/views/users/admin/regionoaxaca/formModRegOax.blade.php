@extends('layouts/index')
@section('main')

 {{ $errors->first()}}
 
			<h2>Modificar Region Oaxaqueña</h2>
			{{Form::model($regoaxaqueña)}}
				<p>
					{{Form::label('id','Id de la region Oaxaqueña')}}
					{{Form::text('id')}}
				</p>
				<p>
					{{Form::label('nombre','region Oaxaqueña ')}}
					{{Form::text('nombre')}}
				</p>
				
				<p>
					{{Form::submit('Aceptar')}}
				</p>				
			{{Form::close()}}

@stop
