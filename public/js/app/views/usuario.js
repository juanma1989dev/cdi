(function( helper, user ){

	App.Views.User = function() {
		
		this.addUser = function() {
			$('#formUserAdmin').on('submit', this.processForm );
		};

		this.deleteUser = function() {
			$('#tablaUsuarios').on('click', '.elimina', this.removeUser );
		};

		this.processForm = function(e) {
			e.preventDefault();
			user.create( $(this).serialize() );
		};

		this.removeUser = function(e) {
			e.preventDefault();
			var respuesta = confirm('Realmente decea eliminar el usuario');
			var row = $(this)
			
			if(respuesta) { 
				var a = user.delete($(this).attr('data-id'));
				if(a.status == 'ok'){
					row.closest ('tr').remove ();
				}
			}
		};

	};

	var a = new App.Views.User();
	a.addUser();
	a.deleteUser();

})( new App.Helpers(), new App.Controllers.User() );