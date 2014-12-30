(function( proyecto ){

	App.Controllers.Proyecto = function()
	{
		var options = "";

		this.municipios = function()
		{
			var a = proyecto.municipios( 1 );
			$.each(a, this.createELements );
			var opt = options;
			options = "";
			return opt;
		}

		this.createELements = function( i, el ){
			options += '<option value = "'+ el.id  +'" >'+ el.nombre +'</option>' ;
		}

		this.localidades = function(){
			var a = proyecto.localidades( 1 );
			$.each(a, this.createELements );
			var opt = options;
			options = "";
			return opt;
		}

		this.subProgramas = function(){
			var a = proyecto.subProgramas( 1 );
			$.each(a, this.createELements );
			var opt = options;
			options = "";
			return opt;
		}
	}

})( new App.Models.Proyecto() );