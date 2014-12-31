@extends('layouts/index')

@section('main')

	<section id="main">
		
		<ul class="info"></ul>
		{{Form::open(['id'=>'formUserAdmin']) }}
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
				{{HTML::link('#','Cancelar',['id'=>'cancelarUsuario'])}}	
			</p>
		{{Form::close()}}

		{{HTML::link('#','Agregar Usuario',['id'=>'agregarUsuario'])}}
		
		<table id="tablaUsuarios" class="tableAdmin">
			<tr>
				<td>Nombre</td>
				<td>Tipo Usuario</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
			@foreach ($usuarios as $usuario) 
			<tr>
				<td>{{ $usuario->nombres }} {{ $usuario->apellidoP }} {{ $usuario->apellidoM }}</td>
				<td>{{ ucfirst( $usuario->nivel ) }}</td>
				<td>{{ HTML::link('/users/admin/'.$usuario->id, 'Editar') }}</td>
				<td>{{ HTML::link('/users/admin/'.$usuario->id.'/eliminar','Eliminar', ['class' => 'elimina','data-id'=> $usuario->id]) }}</td>
			</tr>			
			@endforeach					
		</table>

		{{HTML::link('/admin','Regresar al panel')}}
	</section>

@stop


