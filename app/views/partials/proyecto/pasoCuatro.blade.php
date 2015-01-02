<fieldset id="pas6">
	<legend>Avance Acción:</legend>

   	<fieldset>
    	<legend>Accion:</legend>
    	<p>
            {{ Form::label('avanceCantidad', 'Cantidad') }}
            {{ Form::text('avanceCantidad') }}
    	</p>
  	</fieldset>

  	<fieldset>
        <legend>Beneficiarios:</legend>
        <p>
            {{ Form::label('beneficiariosH', 'Hombres') }}
            {{ Form::text('beneficiariosH') }}
        </p>
        <p>
            {{ Form::label('beneficiariosM', 'Mujeres') }}
            {{ Form::text('beneficiariosM') }}
        </p>
        <p>
            <label>Total:</label> 
            <input type="text" name=""  disabled="true">
        </p>					
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