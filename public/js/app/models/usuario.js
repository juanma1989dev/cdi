(function( helper ){

	App.Models.User = function() {

		this.getData= function(user) {
			$.ajax({
				type : 'POST',
				url : helper.urlBase() + '/users/admin',
				data: user,
				dataType: 'json',
				success: function(data){
					var info = $('.info');
					info.hide().empty();

					if(!data.success){
						info.append('<li>'+ data.errors[Object.keys(data.errors)[0]] +'</li>');
						info.slideDown();	
					}else{
						info.append('<li>Agregado correctamente</li>');
						info.slideDown();

						data.usuario.urlEdit = helper.urlBase() + '/users/admin/'+ data.usuario.id; 

						var template=$('#filaUsuario-template').html();
						Mustache.parse(template);
						var render = Mustache.render(template,data.usuario);

						$('#tablaUsuarios').prepend(render);

						helper.cleanForm('#formUserAdmin');

						$("#formUserAdmin").slideUp();
						$('#agregarUsuario').show();
					}
				 },
				error:function (error){
				}
			});
		};

		this.destroy = function(id){
			var config = {
				type: 'GET',
				url: '/users/admin/'+ id +'/eliminar',
				data : {}
			};

			return helper.ajax(config);
		};

	};

})( new App.Helpers() );