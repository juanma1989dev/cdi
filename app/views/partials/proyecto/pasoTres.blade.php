<fieldset id="pas3">
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
