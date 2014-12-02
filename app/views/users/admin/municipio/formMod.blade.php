@extends('layouts/index')
@section('main')

 {{ $errors->first()}}
 
			<h2>Modificar Municipio</h2>
			{{Form::model($municipio)}}
				<p>
					{{Form::label('id','ID Municipio')}}
					{{Form::text('id')}}
				</p>
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
