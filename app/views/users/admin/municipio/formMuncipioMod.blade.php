@extends('layouts/index')
@section('main')
 {{ $errors->first()}}
			<h2>Modificar Municipio</h2>
			{{Form::model($municipioo)}}
				<p>
					{{Form::label('nombre','Municipio')}}
					{{Form::text('nombre')}}
				</p>
				<p>
					{{Form::label('ccdi','CCDI')}}
					{{Form::text('ccdi')}}
				</p>
				<p>
					{{Form::label('cnch','CNCH')}}
					{{Form::text('cnch')}}
				</p>
				
				<p>
					{{Form::submit('Aceptar')}}
				</p>				
			{{Form::close()}}

@stop
