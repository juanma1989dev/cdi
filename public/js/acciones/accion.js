$(document).on('ready', function(){

	var h = new App.Helpers();

	$('#formAccion').on('submit', function(e){
				e.preventDefault();

				var accion = {
					id :    $('#id').val(),
				    nombre: $('#nombre').val(),
				};

				$.ajax({
					type : 'POST',
					url : h.urlBase() + '/admin/acciones',
					data: accion,
					dataType: 'json',
					success: function(accion){
							console.log(accion);
							var info = $('.info');
							info.hide().empty();

							if(!accion.success){
								info.append('<li>'+ $(accion.errors).toArray()[0] +'</li>');
								info.slideDown();	
							}else{
								info.find('ul').append('<li>Agregado correctamente</li>');
								info.slideDown();

								accion.accion.urlEdit = h.urlBase() + '/admin/acciones'+ accion.accion.id; 

								var template=$('#filAccion-template').html();
								Mustache.parse(template);
								var render = Mustache.render(template,accion.accion);
								$('#tablaAccion').prepend(render);

								$('#id').val('');
						     	$('#nombre').val('');
						     	$('#formAccion').slideUp();
						     	$('#oculta').slideDown();
						   	}
					 },
					error:function (error){
					}
				});

			});
				
				$("#oculta").on('click',function(e){
				e.preventDefault();
				$('#formAccion').slideDown('fast');
				$('#oculta').hide();
			});

			$('#cancela').on('click',function(e){
				e.preventDefault();
				$('#formAccion').slideUp('fast');
				$('#oculta').slideDown('fast');
			});


					$('#tablaAccion').on('click', '.elimina', function(e){
						e.preventDefault();

						var id = $(this).attr('data-id'),
							rowUser = $(this),
							respuesta = confirm('Realmente decea eliminar la accion');

							if( respuesta ){
								$.ajax({
									type:'GET',
									url: h.urlBase() +'/admin/acciones/'+id+'/eliminar',
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