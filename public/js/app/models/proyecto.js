(function( h ){

	App.Models.Proyecto = function(){

		this.municipios = function( estado )
		{
			return h.ajax({
				type : 'POST',
				url : '/proyecto/cargarMunicipios',
				//data: estado
			});
		}

		this.localidades = function( municipio )
		{
			return h.ajax({
				type : 'POST',
				url : '/proyecto/cargarLocalidades',
				//data: municipio
			});
		}

	}

})( new App.Helpers() );