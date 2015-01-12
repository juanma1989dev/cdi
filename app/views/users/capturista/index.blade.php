@extends('layouts/index')

@section('main')
<section id="main">
	
	<h2>Capturista</h2>

	<table class="tableAdmin">	
		<tr>
			<td>No de Expeddinete</td>
			<td>Ubicación</td>
		</tr>
		@foreach( $proyectos as $proyecto )
		<tr> 
			<td>{{ $proyecto->noExpediente }}</td>
			<td>{{ $proyecto->ubicacion->nombre }}</td>
		</tr>
		@endforeach
	</table>

</section>
@stop

