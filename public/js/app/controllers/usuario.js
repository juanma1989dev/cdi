(function( helper, user ){

	App.Controllers.User = function() {

		this.create = function(u) {
			var a= user.store(u);

			if( a.succses ){
				a.usuarios.urlEdit = helper.urlBase() + '/users/admin/'+ data.id; 
			}

			return a;
		};

		this.delete = function(id) {
			return user.destroy(id);
		};
	}
					
	$("#agregarUsuario").on('click',function(e) {
		e.preventDefault();
		$('#formUserAdmin').slideDown();
		$('#agregarUsuario').hide();
	});

	$('#cancelarUsuario').on('click',function(e) {
		e.preventDefault();
		helper.cleanForm('#formUserAdmin');
		$('#formUserAdmin').slideUp();
		$('#agregarUsuario').show();
	});
					

	

		
	

})( new App.Helpers(), new App.Models.User() );