@extends('layouts/index')

@section('main')

	<section id="main">
		
		<ul class="info"></ul>
		{{Form::open(['id'=>'formUserAdmin']) }}
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
		
		<table border="1" id="tablaUsuarios">
			<tr>
				<td>Nombre</td>
				<td>Apellido  Materno</td>
				<td>Apellido Paterno</td>
				<td>Usuario</td>
				<td>Tipo Usuario</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
			@foreach ($usuarios as $usuario) 
			<tr>
				<td>{{$usuario->nombres}}</td>
				<td>{{$usuario->apellidoM}}</td>
				<td>{{$usuario->apellidoP}}</td>
				<td>{{$usuario->usuario}}</td>
				<td>{{$usuario->nivel}}</td>
				<td>{{HTML::link('/users/admin/'.$usuario->id, 'Editar')}}</td>
				<td>{{HTML::link('/users/admin/'.$usuario->id.'/eliminar','Eliminar', ['class' => 'elimina','data-id'=> $usuario->id])}}</td>
			</tr>			
			@endforeach					
		</table>

		{{HTML::link('/admin','Regresar al panel')}}
	</section>

@stop


