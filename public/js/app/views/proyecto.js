(function( proyecto ){
	
	App.Views.Proyecto = function()
	{
		this.events = function()
		{
			$('select#estado').on('change', this.cargarMunicipios );
			$('select#municipio').on('change',  this.cargarLocalidades);
			$('select#programa').on('change',  this.cargarSubProgramas);
		}

		this.cargarMunicipios = function()
		{
			var a = proyecto.municipios();
			$('select#municipio').empty();
			$('select#municipio').append( a );
		}

		this.cargarLocalidades = function()
		{
			var a = proyecto.localidades();
			$('select#localidad').empty();
			$('select#localidad').append( a );
		}

		this.cargarSubProgramas =  function()
		{
			var a = proyecto.subProgramas();	
			$('select#subPrograma').empty();		
			$('select#subPrograma').append( a );
		}

	}


	var p = new App.Views.Proyecto();
	p.events();

})( new App.Controllers.Proyecto() );