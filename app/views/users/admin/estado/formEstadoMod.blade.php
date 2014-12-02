@extends('layouts/index')
@section('main')
 {{ $errors->first()}}
			<h2>Modificar Estado</h2>
			{{Form::model($estado)}}
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
			{{Form::close()}}

@stop
