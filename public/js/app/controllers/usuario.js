(function( helper, user ) {

	App.Controllers.User = function () 
	{

		this.create = function ( u ) 
		{
			var a= user.store( u );

			if ( a.success )
			{
				a.usuario.urlEdit = helper.urlBase() + '/users/admin/'+ a.usuario.id; 
				a.usuario.urlDelete = helper.urlBase() + '/users/admin/'+ a.usuario.id + '/eliminar'; 
				return 	a;
			}

			return a;
		};

		this.delete = function ( id ) 
		{
			var a = user.destroy( id )
			return a;
		};
	}

})( new App.Helpers(), new App.Models.User() );