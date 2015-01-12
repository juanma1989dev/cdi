<fieldset id ="pas2">
	<legend> Acciones</legend>									
	<p>
		{{ Form::label('acciones_id',  'Acción') }}
		{{ Form::select('acciones_id', $acciones ) }}
	</p>

	<h4>Metas</h4>

	<fieldset>
		<legend>CDI:</legend>
		<p>
		   	{{ Form::label('metaCDI', 'Cantidad') }}
		   	{{ Form::text('metaCDI', null, ['placeholder' => 'Cantidad' ]) }}  	
		</p>
		<p>
		   	{{ Form::label('unidadMedidaCDI',  'Unidad de Medida') }}
			{{ Form::select('unidadMedidaCDI', $unidadMedida, null) }}						   
		</p>
	</fieldset>

	<fieldset>
		<legend>CNCH:</legend>
	    <p> 
	    	{{ Form::label('metaCNCH', 'Cantidad' ) }}  
	    	{{ Form::text('metaCNCH', null, ['placeholder' => 'Cantidad' ]) }}	
	    </p>
	    <p>
 			{{ Form::label('unidadMedidaCNCH', 'Unidad de Medida') }}
	    	{{ Form::select('unidadMedidaCNCH', $unidadMedida, null) }} 
	    </p>
	  {{ Form::button('Siguiente', ['id' => 'btn2']) }}
	</fieldset>

	<fieldset>
		<legend>Periodo de Ejecución:</legend>
	    <p>  
	       	{{ Form::label('inicioEjecucion', 'Inicial') }}
			{{ Form::input('date', 'inicioEjecucion') }}
		</p>
		<p>
		   {{ Form::label('finEjecucion', 'Final') }}
		   {{ Form::input('date', 'finEjecucion') }}
	   	</p>
	</fieldset>

	<fieldset>
		<legend>Beneficiarios:</legend>
	    <p>
		   	{{ Form::label('beneficiariosM', 'Mujeres') }}
		   	{{ Form::text('beneficiariosM', null, ['placeholder' => 'Mujeres']) }}
		</p>
		<p>
		   	{{ Form::label('beneficiariosH', 'Hombres') }}
		   	{{ Form::text('beneficiariosH', null, ['placeholder' => 'Hombres']) }}
		</p>
		<p>
		   	{{ Form::label('totalBeneficiados', 'Total') }}
		   	{{ Form::text('totalBeneficiados', null, ['placeholder' => 'Total', 'disabled']) }}
		</p>			
		{{ Form::button('Siguiente', ['id' => 'btn4']) }}
	</fieldset>
</fieldset>