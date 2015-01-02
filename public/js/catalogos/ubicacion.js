$(document).on('ready', function(){

	var h =  new App.Helpers(); 

		$('#formUbicaciones').on('submit', function(e){
						e.preventDefault();

						var ubicacion = {
							id :     $('#id').val(),
						    nombre :   $('#nombre').val(),
						    };

						$.ajax({
							type : 'POST',
							url : h.urlBase() + '/admin/ubicaciones',
							data: ubicacion,
							dataType: 'json',
							success: function(ubicacion){
								console.log(ubicacion);
								var info = $('.info');
								info.hide().empty();
								if(!ubicacion.success){
									info.append('<li>'+ $(ubicacion.errors).toArray()[0] +'</li>');
									info.slideDown();
									}else{
									info.find('ul').append('<li>Agregado correctamente</li>');
									info.slideDown();

									ubicacion.ubicacion.urlEdit = h.urlBase() + '/admin/ubicaciones/'+ ubicacion.ubicacion.id; 

									var template=$('#filaUbicacion-template').html();
									Mustache.parse(template);
									var render = Mustache.render(template,ubicacion.ubicacion);
									$('#tablaUbicacion').prepend(render);
									$('#id').val('');
							     	$('#nombre').val('');
							     	$('#formUbicaciones').slideUp();
							     	$('#oculta').slideDown();
								}
							 },
							error:function (error){
							}
						});

					});
					
					$("#oculta").on('click',function(e){
							e.preventDefault();
							$('#formUbicaciones').slideDown('fast');
							$('#oculta').hide();
						});

					$('#cancela').on('click',function(e){
						e.preventDefault();
						$('#formUbicaciones').hide('fast');
						$('#oculta').slideDown('fast');
					});
					

					$('#tablaUbicacion').on('click','.elimina', function(e){
							e.preventDefault();

							var id = $(this).attr('data-id'),
								rowUser = $(this),
								respuesta = confirm('Realmente decea eliminar la ubicacion');

								if( respuesta ){
									$.ajax({
										type:'GET',
										url: h.urlBase() +'/admin/ubicaciones/'+id+'/eliminar',
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