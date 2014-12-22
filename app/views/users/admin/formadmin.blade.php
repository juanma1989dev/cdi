@extends('layouts/index')

@section('main')
		
		<h1>Panel Administrador</h1>
		<section id="main">
			<p>{{HTML::link('users/admin','Usuarios')}}</p>
			<p>{{HTML::link('/admin/municipio','Municipios')}}</p>
			<p>{{HTML::link('/admin/estado','Estados')}}</p>
			<p>{{HTML::link('/admin/localidad','Localidades')}}</p>
			<p>{{HTML::link('/admin/acciones','Acciones')}}</p>
			<p>{{HTML::link('/admin/carencias/','Carencias')}}</p>
			<p>{{HTML::link('/admin/dependencias','Depedencias')}}</p>
			<p>{{HTML::link('/admin/lenguas','Lenguas')}}</p>
			<p>{{HTML::link('/admin/programas','Programas')}}</p>
			<p>{{HTML::link('/admin/ubicaciones','Ubicaciones')}}</p>
			<p>{{HTML::link('/admin/regionindigena','Region Indigena')}}</p>
			<p>{{HTML::link('/admin/regionoaxaca','Region Oaxaa')}}</p>
		</section>		
@stop


