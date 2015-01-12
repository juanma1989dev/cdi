<fieldset id="pas5">
	<legend>Inversion Programada y Ejercida:</legend>

   	<fieldset>
	    <legend>Programada:</legend>
	    <p>
		    {{ Form::label('federalP', 'Federal') }}
		    {{ Form::text('federalP') }}
	    </p>
	    <p>
		   	{{ Form::label('estatalP', 'Estatal') }}
			{{ Form::text('estatalP') }}
	    </p>
	    <p>
		    {{ Form::label('municipalP', 'Municipal') }}
		    {{ Form::text('municipalP') }}
	    </p>
	    <p>
		    {{ Form::label('otrosP', 'Otros') }}
		    {{ Form::text('otrosP') }}
	    </p>
	    <p>
		    {{ Form::label('totalProgramado', 'Total') }}
		    {{ Form::text('totalProgramado', null, ['disabled']) }}
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
		    {{ Form::label('totalEjercido', 'Total') }}
		    {{ Form::text('totalEjercido') }}
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