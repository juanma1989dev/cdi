@extends('layouts/index')

@section('main')
		
		<h1>Panel Administrador</h1>
		<section id="main">
			<p>{{HTML::link('users/admin','Usuarios')}}</p>
			<p>{{HTML::link('/admin/municipio','Municipios')}}</p>
			<p>{{HTML::link('/admin/estado','Estados')}}</p>
		</section>		
@stop



