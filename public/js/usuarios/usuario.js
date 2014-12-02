$(document).on('ready', function(){


			$('#formAlta').on('submit', function(e){
				e.preventDefault();

				var usuario = {
					nombres : $('#nombres').val(),
				    apellidoM : $('#apellidoM').val(),
				    apellidoP : $('#apellidoP').val(),
				    usuario : $('#usuario').val(),
				    contrasenia : $('#contrasenia').val(),
				    nivel : $('#nivel').val()
				};

				$.ajax({
					type : 'POST',
					url : App.Helpers.urlBase + '/users/admin',
					data: usuario,
					dataType: 'json',
					success: function(usuario){
						console.log(usuario);


						var info = $('.info');

						info.hide().empty();



						if(!usuario.success){
							info.append('<li>'+ $(usuario.errors).toArray()[0] +'</li>');
							info.slideDown();	
						}else{
							info.find('ul').append('<li>Agregado correctamente</li>');
							info.slideDown();

							usuario.usuario.urlEdit = App.Helpers.urlBase + '/users/admin/'+ usuario.usuario.id; 

							var template=$('#filaUsuario-template').html();
							Mustache.parse(template);
							var render = Mustache.render(template,usuario.usuario);
							$('#tablaUsuarios').prepend(render);
							$('#nombres').val('');
					     	$('#apellidoM').val('');
					     	$('#apellidoP').val('');
						    $('#usuario').val('');
						    $('#contrasenia').val('');
						    $('#nivel').val('');
						    $('#formAlta').slideUp();
						}
					 },
					error:function (error){
					}
				});

			});

			$("#oculta").on('click',function(e){
					e.preventDefault();
					$('#formAlta').slideDown('fast');
					$('#oculta').hide();
				});

			$('#cancela').on('click',function(e){
				e.preventDefault();
				$('#formAlta').slideUp('fast');
				$('#oculta').slideDown('fast');''
			})

		});