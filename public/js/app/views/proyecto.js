(function( proyecto ){
	
	App.Views.Proyecto = function()
	{
		this.events = function()
		{
			$('select#estado').on('change', this.cargarMunicipios );
			$('select#municipio').on('change',  this.cargarLocalidades)
		}

		this.cargarMunicipios = function()
		{
			proyecto.municipios();
		}

		this.cargarLocalidades = function()
		{
			alert(' yo tambien cambie');
		}

	}


	var p = new App.Views.Proyecto();
	p.events();

})( new App.Controllers.Proyecto() );