<fieldset id="pas5">
	<legend>Inversion Programada y Ejercida:</legend>

   	<fieldset>
	    <legend>Programada:</legend>
	    <p>
		    {{ Form::label('federal', 'Federal') }}
		    {{ Form::text('federal') }}
	    </p>
	    <p>
		   	{{ Form::label('estatal', 'Estatal') }}
			{{ Form::text('estatal') }}
	    </p>
	    <p>
		    {{ Form::label('municipal', 'Municipal') }}
		    {{ Form::text('municipal') }}
	    </p>
	    <p>
		    {{ Form::label('otros', 'Otros') }}
		    {{ Form::text('otros') }}
	    </p>
	    <p>
		    {{ Form::label('totalProgramado', 'Total') }}
		    {{ Form::text('totalProgramado') }}
	    </p>						   
	</fieldset>

	<fieldset>
	    <legend>Ejercida:</legend>
	    <p>
		    {{ Form::label('federalE', 'Federal') }}
		    {{ Form::text('federalE') }}
	    </p>
	    <p>
		   	{{ Form::label('estatalE', 'Estatal') }}
			{{ Form::text('estatalE') }}
	    </p>
	    <p>
		    {{ Form::label('municipalE', 'Municipal') }}
		    {{ Form::text('municipalE') }}
	    </p>
	    <p>
		    {{ Form::label('otrosE', 'Otros') }}
		    {{ Form::text('otrosE') }}
	    </p>
	    <p>
		    {{ Form::label('totalProgramadoE', 'Total') }}
		    {{ Form::text('totalProgramadoE') }}
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