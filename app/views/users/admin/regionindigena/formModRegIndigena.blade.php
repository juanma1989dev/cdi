@extends('layouts/index')
@section('main')

 {{ $errors->first()}}
 
			<h2>Modificar Region Indigena</h2>
			{{Form::model($regindigena)}}
				<p>
					{{Form::label('id','Id de la region indigena ')}}
					{{Form::text('id')}}
				</p>
				<p>
					{{Form::label('nombre','region indigena ')}}
					{{Form::text('nombre')}}
				</p>
				
				<p>
					{{Form::submit('Aceptar')}}
				</p>				
			{{Form::close()}}

@stop
