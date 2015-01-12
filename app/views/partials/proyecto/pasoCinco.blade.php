<fieldset id="pas7">
	<legend>Observaciones:</legend>

	<p>
		{{ Form::label('nombreBeneficiario', 'Nombre del Beneficiario') }}				
		{{ Form::text('nombreBeneficiario', null,  ['placeholder' => 'Nombre del Beneficiario']) }}				
	</p>
	<p>
		{{ Form::label('rfc', 'RFC') }}				
		{{ Form::text('rfc', null,  ['placeholder' => 'RFC']) }}
	</p>
	<p>			
		{{ Form::label('curp', 'CURP') }}				
		{{ Form::text('curp', null,  ['placeholder' => 'CURP']) }}
	</p>
	<p>
		{{ Form::label('correo', 'Correo') }}				
		{{ Form::text('correo', null,  ['placeholder' => 'Correo']) }}
	</p>
	<p>
		{{ Form::label('telefono', 'Telefono') }}				
		{{ Form::text('telefono', null,  ['placeholder' => 'Telefono']) }}	
	</p>	
	<p>
		{{ Form::label('celular', 'Celular') }}				
		{{ Form::text('celular', null,  ['placeholder' => 'Celular']) }}
	</p>
	<p>
		{{ Form::label('viable', 'Considera el proyecto exitoso') }}
		{{ Form::checkbox('viable') }}
	</p>
	<p>
		<label>Imagenes</label>
		<input type="file" name="" value="Subir...">
	</p>
	<p>
		{{ Form::label('descripcion', 'Descripción') }}
		{{ Form::textarea('descripcion', null, ['placeholder' => 'Descripción']) }}
	</p>
	<p>
		{{ Form::label('evento', 'Eveto') }}
		{{ Form::text('evento', null, ['placeholder' => 'Evento..'] ) }}
	</p>
	<p>
		{{ Form::label('fechaEvento', 'Fecha del Eveto') }}
		{{ Form::input('date', 'fechaEvento', null, ['placeholder' => 'DD/MM/YYYY']) }}
	</p>
	<p>
		{{ Form::label('lugarEvento', 'Lugar del Evento') }}
		{{ Form::text('lugarEvento', null, ['placeholder' => 'Lugar del Evento'] ) }}
	</p>

</fieldset>