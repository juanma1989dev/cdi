(function( h ){

	App.Models.Proyecto = function(){

		this.municipios = function( estado )
		{
			var r = h.ajax({
				type : 'GET',
				url : '/proyecto/cargarMunicipios',
				//data: estado
			});

			return r;
		}

		this.localidades = function( municipio )
		{
			var r = h.ajax({
				type : 'GET',
				url : '/proyecto/cargarLocalidades',
				//data: municipio
			});

			return r;
		}

		this.subProgramas = function( programa )
		{ 
			var r = h.ajax({
				type : 'GET',
				url  : '/proyecto/cargarSubProgramas',
				data : programa
			});

			return r;
		}

	}

})( new App.Helpers() );