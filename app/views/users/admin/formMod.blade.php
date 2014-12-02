@extends('layouts/index')

@section('main')

       {{ $errors->first()}}
		{{Form::model($usuario)}}
		<p>

			{{Form::label('nombres','Ingresa tu nombre(s)')}}
			{{Form::text('nombres')}}
		</p>
			<p>
				{{Form::label('apellidoM','Ingresa apellido materno')}}
				{{Form::text('apellidoM')}}
			</p>
			<p>
				{{Form::label('apellidoP','Ingresa apellido Paterno')}}
				{{Form::text('apellidoP')}}
			</p>
			<p>
				{{Form::label('usuario','Ingresa tu usuario')}}
				{{Form::text('usuario')}}
			</p>
			<p>
				{{Form::label('contrasenia','ingresa una contraseña')}}
				{{Form::text('contrasenia')}}
			</p>
			<p>
				{{Form::label('nivel','Ingresa el nivel del usuario')}}
				{{ Form::select('nivel',[null=>'Seleccione...', 
										'capturista'=>'Capturista',
											 'administrador'=>'Administrador',
											 		'superAdministrador'=>'SuperAdministrador']) }}
				
			</p>
			<p>
				{{Form::submit('Aceptar')}}
			</p>


		{{Form::close()}}

@stop