@extends('layouts/index')

{{ HTML::style('css/steeps.css') }}

@section('main')
	
	<progress id="barra" value="0" max="140"></progress>

	{{ Form::open(['method' => 'POST', 'id' => 'multiphase']) }}	

		<fieldset id="pas1">
			<h3>pas1</h3>
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
				{{ Form::select('ubicacion', $ubicacion, null) }}
			</p>
			<p>		
				{{ Form::label('noOficio', 'No de Oficio') }}
				{{ Form::text('noOficio', null, ['placeholder' => 'No de Oficio' ]) }}	
			</p>
			<p>
				{{ Form::label('estado', 'Estado') }}
				{{ Form::select('estado', $estados, null) }}
			</p>
			<p>
				{{ Form::label('municipio', 'Municipio') }}
				{{ Form::select('municipio') }}
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
				{{ Form::label('programa', 'Programa') }}
				{{ Form::select('programa', $programas,	null) }}
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

		<fieldset id ="pas2">
			<h3>pas2</h3>
			<legend> Acciones</legend>									
			<p>
				{{ Form::label('accion',  'Acción') }}
				{{ Form::select('accion', $acciones ) }}

			</p>

			<h3>Metas</h3>

			<fieldset>
				<legend>CDI:</legend>
				<p>
				   	{{ Form::label('cantidadCDI', 'Cantidad') }}
				   	{{ Form::text('cantidadCDI', null, ['placeholder' => 'Cantidad' ]) }}  	
				</p>
				<p>
				   	{{ Form::label('unidadMedidaCDI',  'Unidad de Medida') }}
					{{ Form::select('unidadMedidaCDI', $unidadMedida, null) }}						   
				</p>
			</fieldset>

			<fieldset>
			<legend>CNCH:</legend>
			    <p> 
			    	{{ Form::label('cantidadCNCH', 'Cantidad' ) }}  
			    	{{ Form::text('cantidadCNCH', null, ['placeholder' => 'Cantidad' ]) }}	
			    </p>
			    <p>
		 			{{ Form::label('cantidadCNCH', 'Unidad de Medida') }}
			    	{{ Form::select('cantidadCNCH', $unidadMedida, null) }} 
			    </p>
			  </fieldset>
			  {{ Form::button('Siguiente', ['id' => 'btn2']) }}
			</fieldset>
		</fieldset>

		<fieldset id="pas3">
			<h3>pas3</h3>
			<legend>Periodo de Ejecución:</legend>
		    <p>  
		       	{{ Form::label('fechaInicial', 'Inicial') }}
				{{ Form::input('date', 'fechaInicial') }}
			</p>
			<p>
			   {{ Form::label('fechaFinal', 'Final') }}
			   {{ Form::input('date', 'fechaFinal') }}
		   	</p>
			{{ Form::button('Siguiente', ['id' => 'btn3']) }}
		</fieldset>

		<fieldset id="pas4">
			<h3>pas4</h3>
			
			<legend>Beneficiarios:</legend>
		    <p>
			   	<label>Hombres:</label>
			   	<input type="text"/>
			</p>
			<p>
			   	<label>Mujeres:</label>
			   	<input type="text"/>
			</p>
			<p>
			   	<label>Total:</label>
			   	<input type="text" value="disables" />
			</p>			
			{{ Form::button('Siguiente', ['id' => 'btn4']) }}
		</fieldset>

		<fieldset id="pas5">
			<h3>pas5</h3>

			<legend>Inversion Programada y Ejercida:</legend>

		   	<fieldset>
			    <legend>Programada:</legend>
			    <p>
				    <label>Estatal:</label>
				    <input type="text" name="" value="">
			    </p>
			    <p>
				    <label>Municipal:</label>
				    <input type="text" name="" value="">
			    </p>
			    <p>
				    <label>Otros:</label>
				    <input type="text" name="" value="">
			    </p>
			    <p>
				    <label>Total:</label>
				    <input type="text" name="" value="">
			    </p>						   
			</fieldset>

			<fieldset>
				<legend>Ejecutada:</legend>
				<p>
			    	<label>Estatal:</label>
			    	<input type="text" name="" value="">
		    	</p>
		    	<p>
			    	<label>Municipal:</label>
			    	<input type="text" name="" value="">
		    	</p>
		    	<p>
			    	<label>Otros:</label><input type="text" name="" value="">
		    	</p>
		    	<p>
			    	<label>Total:</label><input type="text" name="" value="">	
		    	</p>			   
		  	</fieldset>

		  	<fieldset>
		    	<legend>Nombre:</legend>
		    	<p>
		    		<input type="text" name="" value="">
		    	</p>
		    	<p>
		   			<input type="text" name="" value="">
		   		</p>	
		   		<p>
		    		<input type="text" name="" value="">
		    	</p>
		    	<p>
		    		<input type="text" name="" value="">
		    	</p>					   
		  	</fieldset>

		  	<fieldset>
		    	<legend>Avance %:</legend>
		    	<p>
			    	<label for="">Fisico:</label>
			    	<input type="text" name="avanceFisico" value="">				   
		    	</p>
		  	</fieldset>

			{{ Form::button('Siguiente', ['id' => 'btn5'])  }}
		</fieldset>

		<fieldset id="pas6">
			<h3>pas6</h3>

			<legend>Avance Acción:</legend>

		   	<fieldset>
		    	<legend>Accion:</legend>
		    	<p>	
		    		<label>Cantidad:</label>
		    		<input type="text" name="" value="">
		    	</p>
		  	</fieldset>

		  	<fieldset>
		    	<legend>Beneficiarios:</legend>
		    	<p><label>Hombres:</label><input type="text" name="" value=""></p>
		    	<p><label>Mujeres:</label><input type="text" name="" value=""></p>
		    	<p><label>Total:</label><input type="text" name="" value="0" disabled="true"></p>					
		  	</fieldset>

		   	<fieldset>
		    	<legend>Avance %:</legend>
		   		<p>
		   			<label for="">Financiero:</label>
		    		<input type="text" name="avanceFinanciero" value="">
		    	</p>
		  	</fieldset>
			
			<button id="btn6">sigueinte</button>
		</fieldset>

		<fieldset id="pas7">
			<h3>Paso7</h3>
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

		{{ Form::submit('Guardar') }}
	{{ Form::close() }}
  	</script>
@stop