<fieldset id ="pas2">
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