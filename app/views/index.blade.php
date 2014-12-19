@extends('layouts/index')

@section('main')
	<section id="main">
		<section id="dep">
			<img src="{{ asset('images/depIMG.jpg') }}" alt="Logo del CDI">
		</section>
		<section id="login">
			<fieldset>
				<legend>Login</legend>
				{{ Form::open(['route' => 'login', 'method' => 'POST', 'id' => 'form-login']) }}
					<p>
						{{ Form::label('user', 'Usuario') }}	
						{{ Form::text('user', null, ['id' => 'user', 'placeholder' =>'Usuario']) }}
					</p>
					<p>
						{{ Form::label('password', 'Contraseña') }}	
						{{ Form::password('password', ['id' => 'algo', 'placeholder' => 'Contraseña'] ) }}					
					</p>
					<p>
						<input type="submit" value="Ingresar" class="btn">					
					</p>
					<p>
						<center>{{ HTML::link('/recuperarPassword', 'Recuperar Contraseña') }}</center>
					</p>
				{{ Form::close() }}
			</fieldset>			
		</section>
	</section>
@stop
