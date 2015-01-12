<fieldset id="pas1">
	<legend>Captura del Proyecto</legend>
	<p>
		{{ Form::label('noRegistro', 'No de Regsitro') }}
		{{ Form::text('noRegsitro', null, ['disabled']) }}
	</p>
	<p>
		{{ Form::label('noExpediente', 'No de Expediente') }}
		{{ Form::text('noExpediente', null, ['diseabled', 'placeholder' => 'No de Expediente']) }}
	</p>
	<p>
		{{ Form::label('ubicacion', 'Ubiacion') }}
		{{ Form::select('ubicacion', $ubicacion, null, ['placeholder' => 'io']) }}
	</p>
	<p>		
		{{ Form::label('noOficioSolicitud', 'No de Oficio') }}
		{{ Form::text('noOficioSolicitud', null, ['placeholder' => 'No de Oficio' ]) }}	
	</p>
	<p>
		{{ Form::label('estado', 'Estado') }}
		{{ Form::select('estado', $estados, null) }}
	</p>
	<p>
		{{ Form::label('municipio', 'Municipio') }}
		{{ Form::select('municipio', array(), null, ['placeholder' => 'Selecciona']) }}
	</p>
	<p>
		{{ Form::label('localidad', 'Localidad') }}
		{{ Form::select(
							'localidad',
							[null => 'Seleccione'],
							null
						) 
										}}
	</p>
	<p>
		{{ Form::label('dependencia', 'Dependecia') }}
		{{ Form::select('dependencia', $dependencias, null) }}
	</p>
	<p>
		{{ Form::label('programas_id', 'Programa') }}
		{{ Form::select('programas_id', $programas,	null) }}
	</p>
	<p>
		{{ Form::label('subPrograma', 'Sub-Programa') }}
		{{ Form::select(
							'subPrograma',
							[
								null => 'Seleccione'
							],
							null
						) 
										}}
	</p>
	<p>
		{{ Form::label('carencia', 'Carencia') }}
		{{ Form::select('carencia', $carencias ) }}
	</p>
	<p>
		{{ Form::label('status', 'Estatus') }}
		{{ Form::select('status', $status, null	) }}
	</p>
	<p>
		{{ Form::label('municipioCNDH', 'Municipio CNDH') }}
		{{ Form::text('municipioCNDH', null, ['placeholder' => 'Municipio CNDH' ]) }}
	</p>
 	<p>
 		{{ Form::label('centroCoordinador', 'CCDI') }}
 		{{ Form::text('centroCoordinador', null, ['placeholder' => 'CCDI' ]) }}
 	</p>
 	<p>
 		{{ Form::label('lengua', 'Lengua') }}
 		{{ Form::text('lengua', null, ['placeholder' => 'Lengua' ]) }}
 	</p>
 	<p>
 		{{ Form::label('regionIndigena',  'Región Indigena') }}
 		{{ Form::text('regionIndigena', null, ['placeholder' => 'Region Indigena' ]) }}
 	</p>
 	<p>
 		{{ Form::label('region', 'Región') }}
 		{{ Form::text('region', null, ['placeholder' => 'Region' ]) }}
 	</p>
 	<p>
 		{{ Form::label('microRegion', 'Microregión') }}
 		{{ Form::text('microRegion', null, ['placeholder' => 'Microregion' ]) }}
		</p>		
		<p>
			{{ Form::label('federal', 'Federal') }}
			{{ Form::text('federal', null, ['placeholder' => 'Federal' ]) }}
		</p>
		<p>
		 {{ Form::label('local', 'Local') }}
		 {{ Form::text('local', null, ['placeholder' => 'Local' ]) }}
	</p>
	{{ Form::button('Siguiente', ['btn1']) }}
</fieldset>