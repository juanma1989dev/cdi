(function( helper, user ){

	App.Controllers.User = function() {

		this.create = function(u){
			user.getData(u);
		};

		this.delete = function(id) {
			return user.destroy(id);
		};
	}
					
	$("#agregarUsuario").on('click',function(e){
		e.preventDefault();
		$('#formUserAdmin').slideDown();
		$('#agregarUsuario').hide();
	});

	$('#cancelarUsuario').on('click',function(e){
		e.preventDefault();
		helper.cleanForm('#formUserAdmin');
		$('#formUserAdmin').slideUp();
		$('#agregarUsuario').show();
	});
					

	

		
	

})( new App.Helpers(), new App.Models.User() );