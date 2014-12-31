@extends('layouts/index')

@section('main')

       {{ $errors->first()}}
		{{Form::model($usuario) }}
			<p>
				{{Form::label('nombres','Nombre(s)')}}
				{{Form::text('nombres', null, ['placeholder' => 'Nombre(s)'])}}
			</p>
			<p>
				{{Form::label('apellidoP','Apellido Paterno')}}
				{{Form::text('apellidoP', null, ['placeholder' => 'Apellido Paterno'] )}}
			</p>
			<p>
				{{Form::label('apellidoM','Apellido Materno')}}
				{{Form::text('apellidoM', null, ['placeholder' => 'Apellido Materno'])}}
			</p>
			<p>
				{{Form::label('usuario','Usuario')}}
				{{Form::text('usuario', null, ['placeholder' => 'Usuario'])}}
			</p>
			<p>
				{{Form::label('contrasenia','Contraseña')}}
				{{Form::text('contrasenia', null, ['placeholder' => 'Contraseña'])}}
			</p>
			<p>
				{{Form::label('nivel','Ingresa el nivel del usuario')}}
				{{ Form::select('nivel',
										['null' =>'Seleccione...',
										 'capturista' => 'Capturista',
										  'administrador' => 'Administrador',
										  'superAdministrador' => 'SuperAdministrador',
										  'coordinador'=>'Coordinador']

										) }}
				
			</p>
			<p>
				{{Form::submit('Aceptar')}}
			</p>
			<p>
				{{HTML::link('/users/admin','Cancelar')}}	
			</p>
		{{Form::close()}}

@stop