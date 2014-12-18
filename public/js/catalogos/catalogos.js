$(document).on('ready', function(){

		$('#formCarencia').on('submit', function(e){
						e.preventDefault();

						var carencia = {
							id :     $('#id').val(),
						    nombre :   $('#nombre').val(),
						    };

						$.ajax({
							type : 'POST',
							url : App.Helpers.urlBase + '/admin/carencias',
							data: carencia,
							dataType: 'json',
							success: function(carencia){
								console.log(carencia);
								var info = $('.info');
								info.hide().empty();
								if(!carencia.success){
									info.append('<li>'+ $(carencia.errors).toArray()[0] +'</li>');
									info.slideDown();	
								}else{
									info.find('ul').append('<li>Agregado correctamente</li>');
									info.slideDown();

									carencia.carencia.urlEdit = App.Helpers.urlBase + '/admin/carencias/'+ carencia.carencia.id; 

									var template=$('#filaCarencia-template').html();
									Mustache.parse(template);
									var render = Mustache.render(template,carencia.carencia);
									$('#tablaCarencia').prepend(render);
									$('#id').val('');
							     	$('#nombre').val('');
							     	$('#formCarencia').slideUp();
							     	$('#oculta').slideDown();
								}
							 },
							error:function (error){
							}
						});

					});
					
					$("#oculta").on('click',function(e){
							e.preventDefault();
							$('#formCarencia').slideDown('fast');
							$('#oculta').hide();
						});

					$('#cancela').on('click',function(e){
						e.preventDefault();
						$('#formCarencia').hide('fast');
						$('#oculta').slideDown('fast');
					});
					

					$('#tablaCarencia').on('click','.elimina', function(e){
							e.preventDefault();

							var id = $(this).attr('data-id'),
								rowUser = $(this),
								respuesta = confirm('Realmente decea eliminar la carencia');

								if( respuesta ){
									$.ajax({
										type:'GET',
										url: App.Helpers.urlBase +'/admin/carencias/'+id+'/eliminar',
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