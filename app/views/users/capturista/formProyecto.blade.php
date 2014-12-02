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
				{{ Form::text('noExpediente', null, ['diseabled']) }}
			</p>
			<p>
				{{ Form::label('ubicacion', 'Ubiacion') }}
				{{ Form::select(
									'ubicacion',
									[null => 'Seleccione'],
									null
								) 
												}}
			</p>
			<p>		
				{{ Form::label('noOficio', 'No de Oficio') }}
				{{ Form::text('noOficio') }}	
			</p>
			<p>
				{{ Form::label('estado', 'Estado') }}
				{{ Form::select(
									'estado',
									[null => 'Seleccione'],
									null
								) 
												}}
			</p>
			<p>
				{{ Form::label('municipio', 'Municipio') }}
				{{ Form::select(
									'municipio',
									[null => 'Seleccione'],
									null
								) 
												}}
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
				{{ Form::select(
									'dependendia',
									[null => 'Seleccione'],
									null
								) 
												}}
			</p>
			<p>
				{{ Form::label('programa', 'Programa') }}
				{{ Form::select(
									'programa',
									[null => 'Seleccione'],
									null
								) 
												}}
			</p>
			<p>
				{{ Form::label('subPrograma', 'Sub-Programa') }}
				{{ Form::select(
									'subPrograma',
									[null => 'Seleccione'],
									null
								) 
												}}
			</p>
			<p>
				{{ Form::label('carencia', 'Carencia') }}
				{{ Form::select(
									'carencia',
									[null => 'Seleccione'],
									null
								) 
												}}
			</p>
			<p>
				{{ Form::label('status', 'Estatus') }}
				{{ Form::select(
									'status',
									[null => 'Seleccione'],
									null
								) 
												}}
			</p>
			<p>
				{{ Form::label('municipioCNDH', 'Municipio CNDH') }}
				{{ Form::text('municipioCNDH') }}
			</p>
		 	<p>
		 		{{ Form::label('centroCoordinador', 'CCDI') }}
		 		{{ Form::text('centroCoordinador') }}
		 	</p>
		 	<p>
		 		{{ Form::label('lengua', 'Lengua') }}
		 		{{ Form::text('lengua') }}
		 	</p>
		 	<p>
		 		{{ Form::label('regionIndigena',  'Región Indigena') }}
		 		{{ Form::text('regionIndigena') }}
		 	</p>
		 	<p>
		 		{{ Form::label('region', 'Región') }}
		 		{{ Form::text('region') }}
		 	</p>
		 	<p>
		 		{{ Form::label('microRegion', 'Microregión') }}
		 		{{ Form::text('microRegion') }}
	 		</p>		
	 		<p>
	 			{{ Form::label('federal', 'Federal') }}
	 			{{ Form::text('federal') }}
	 		</p>
	 		<p>
				 {{ Form::label('local', 'Local') }}
				 {{ Form::text('local') }}
			</p>
			{{ Form::button('Siguiente', ['btn1']) }}
		</fieldset>

		<fieldset id ="pas2">
			<h3>pas2</h3>
			<legend> Acciones</legend>									
			<p>
				{{ Form::label('accion',  'Acción') }}
				{{ Form::select(	
									'accion',
									[null => 'Seleccione'],
									null
								) 
				}}

			</p>

			<h3>Metas</h3>

			<fieldset>
				<legend>CDI:</legend>
				<p>
				   	{{ Form::label('cantidadCDI', 'Cantidad') }}
				   	{{ Form::text('cantidadCDI') }}  	
				</p>
				<p>
				   	{{ Form::label('unidadMedidaCDI',  'Unidad de Medida') }}
					{{ Form::select(	
										'unidadMedidaCDI',
										[null => 'Seleccione'],
										null
									) 
					}}						   
				</p>
			</fieldset>

			<fieldset>
			<legend>CNCH:</legend>
			    <p> 
			    	{{ Form::label('catidadCNCH', 'Cantidad' ) }}  
			    	{{ Form::text('catidadCNCH') }}	
			    </p>
			    <p>
			    	<label>Unidad de Medida:</label>	    	
			    	<select name="">
		 				<option value="1">Seleccione...</option>
		 				<option value="2">Uno...</option>
		 			</select>   
		 			{{ Form::label('') }}
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
		   			<input type="text" name="" value="">
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
		    	<label>Cantidad:</label><input type="text" name="" value="">		    						   
		  	</fieldset>

		  	<fieldset>
		    	<legend>Beneficiarios:</legend>
		    	<label>Hombres:</label><input type="text" name="" value="">
		    	<label>Mujeres:</label><input type="text" name="" value="">
		    	<label>Total:</label><input type="text" name="" value="0" value="disables">					   
		  	</fieldset>

		   	<fieldset>
		    	<legend>Avance %:</legend>
		   		<label for="">Financiero:</label>
		    	<input type="text" name="avanceFinanciero" value="">				   
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
			</p>
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


  	{{ HTML::script('js/jquery-1.11.1.js') }}
  	<script>
  		$(document).on('ready', function() {
  			$('#multiphase').on('submit', function(e){
  				e.preventDefault();
  				var data = $('#multiphase').serialize();

  				$.ajax({
  					type : 'POST',
  					url  : '/projects/cdi/public/capturista/capturaProyecto',
  					data : data,
  					dataType : 'json',
  					success : function(data) {
  						console.log(data);
  					},
  					error : function(error) {
  						console.log(error);
  					}
  				});
  			});
  		});
  	</script>
@stop