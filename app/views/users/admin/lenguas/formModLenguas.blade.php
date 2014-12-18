@extends('layouts/index')
@section('main')

 {{ $errors->first()}}
 
			<h2>Modificar Lengua</h2>
			{{Form::model($lengua)}}
				<p>
					{{Form::label('id','Id de la lengua')}}
					{{Form::text('id')}}
				</p>
				<p>
					{{Form::label('nombre','Lengua')}}
					{{Form::text('nombre')}}
				</p>
				
				<p>
					{{Form::submit('Aceptar')}}
				</p>				
			{{Form::close()}}

@stop
