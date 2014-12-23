(function( helper, user ){

	App.Views.User = function() {
		
		this.addUser = function() {
			$('#formUserAdmin').on('submit',  { self: this}, this.processForm );
		};

		this.deleteUser = function() {
			$('#tablaUsuarios').on('click', '.elimina', this.removeUser );
		};

		this.processForm = function(e) {
			e.preventDefault();

			var self = e.data.self,
				r = user.create( $(this).serialize() );

			if(r.success){
				self.addRowUser(r.usuario);
			}else{
				$('.info').append('<li>'+ r.errors[Object.keys(r.errors)[0]] +'</li>').slideDown();	
			}
		};

		this.addRowUser = function(data){
			var info = $('.info');

			info.empty()
				.append('<li>Agregado correctamente</li>')
				.slideDown();


			helper.render('rowUserAdmin', '#tablaUsuarios', data);
			helper.cleanForm('#formUserAdmin');

			$("#formUserAdmin").slideUp();
			$('#agregarUsuario').show();
		};

		this.removeUser = function(e) {
			e.preventDefault();
			var respuesta = confirm('Realmente decea eliminar el usuario');
			var row = $(this)
			
			if(respuesta) { 
				var r = user.delete($(this).attr('data-id'));
				if( r.success ){
					row.closest ('tr').remove ();
				}
			}
		};

	};

	var a = new App.Views.User();
	a.addUser();
	a.deleteUser();

})( new App.Helpers(), new App.Controllers.User() );