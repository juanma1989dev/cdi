<fieldset id="pas7">
	<legend>Observaciones:</legend>

	<p>
		<label>Nombre del Beneficiario:</label>
		<input type="text" name="nombreBeneficiario">				
	</p>
	<p>
		<label>RFC:</label>
		<input type="text" name="rfc">	
	</p>
	<p>			
		<label>Curp:</label>
		<input type="text" name="curp" value="" placeholder="">	
	</p>
	<p>
		<label>Correo:</label>
		<input type="text" name="correo" value="" placeholder="">
	</p>
	<p>
		<label>Tel.Local:</label>
		<input type="text" name="telefono" value="" placeholder="">		
	</p>	
	<p>
		<label>Celular:</label>
		<input type="text" name="celular" value="" placeholder="">	
	</p>
	<p>
		{{ Form::label('viable', 'Considera el proyecto exitoso') }}
		{{ Form::checkbox('viable') }}
	</p>
	<p>
		<label>Imagenes</label>
		<input type="file" name="" value="Subir...">
	</p>
</fieldset>