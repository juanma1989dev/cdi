$(document).on('ready', function(){
		var helper = new App.Helpers();

		$('#formUserAdmin').on('submit', function(e){
			e.preventDefault();
			var usuario =  $('#formUserAdmin').serialize();

			var response = $.ajax({
				type : 'POST',
				url : helper.urlBase() + '/users/admin',
				data: usuario,
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

			console.log(response);

		});
					
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
					

		$('#tablaUsuarios').on('click','.elimina', function(e){
			e.preventDefault();

			var id = $(this).attr('data-id'),
				rowUser = $(this),
				respuesta = confirm('Realmente decea eliminar el usuario');

			if( respuesta ){
				$.ajax({
					type:'GET',
					url: helper.urlBase() +'/users/admin/'+id+'/eliminar',
					data : {},
					dataType:'json',
					success:function(data){
						rowUser.closest('tr').remove();
					},
					error: function(error){

					}
				});
			}
		});

	});