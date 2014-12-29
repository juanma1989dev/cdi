(function( helper ){

	App.Models.User = function() 
	{
		this.store= function ( user ) 
		{
			return helper.ajax({
				type : 'POST',
				url : '/users/admin',
				data: user	
			});
		};

		this.destroy = function ( id )
		{
			return helper.ajax({
				type: 'GET',
				url: '/users/admin/'+ id +'/eliminar'
			});
		};

	};

})( new App.Helpers() );