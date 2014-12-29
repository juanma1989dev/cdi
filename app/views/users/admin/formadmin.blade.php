@extends('layouts/index')

@section('main')	
	<section id="main">
		<h1>Panel de Administración</h1>
		{{ HTML::link('users/admin','Usuarios', array('class' => 'module')) }}
		{{ HTML::link('/admin/municipio','Municipios', array('class' => 'module')) }}
		{{ HTML::link('/admin/estado','Estados', array('class' => 'module')) }}
		{{ HTML::link('/admin/localidad','Localidades', array('class' => 'module')) }}
		{{ HTML::link('/admin/acciones','Acciones', array('class' => 'module')) }}
		{{ HTML::link('/admin/carencias/','Carencias', array('class' => 'module')) }}
		{{ HTML::link('/admin/dependencias','Depedencias', array('class' => 'module')) }}
		{{ HTML::link('/admin/lenguas','Lenguas', array('class' => 'module')) }}
		{{ HTML::link('/admin/programas','Programas', array('class' => 'module')) }}
		{{ HTML::link('/admin/ubicaciones','Ubicaciones', array('class' => 'module')) }}
		{{ HTML::link('/admin/regionindigena','Región Indigena', array('class' => 'module')) }}
		{{ HTML::link('/admin/regionoaxaca','Región Oaxaca', array('class' => 'module')) }}
	</section>		
@stop


