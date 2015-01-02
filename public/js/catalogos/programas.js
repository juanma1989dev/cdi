$(document).on('ready', function(){

	var h = new App.Helpers();

		$('#formPrograma').on('submit', function(e){
						e.preventDefault();

						var programa = {
							id :     $('#id').val(),
						    nombre :   $('#nombre').val(),
						    };

						$.ajax({
							type : 'POST',
							url : h.urlBase() + '/admin/programas',
							data: programa,
							dataType: 'json',
							success: function(programa){
								console.log(programa);
								var info = $('.info');
								info.hide().empty();
								if(!programa.success){
									info.append('<li>'+ $(programa.errors).toArray()[0] +'</li>');
									info.slideDown();	
								}else{
									info.find('ul').append('<li>Agregado correctamente</li>');
									info.slideDown();

									programa.programa.urlEdit = h.urlBase() + '/admin/programas/'+ programa.programa.id; 

									var template=$('#filaPrograma-template').html();
									Mustache.parse(template);
									var render = Mustache.render(template,programa.programa);
									$('#tablaPrograma').prepend(render);
									$('#id').val('');
							     	$('#nombre').val('');
							     	$('#formPrograma').slideUp();
							     	$('#oculta').slideDown();
								}
							 },
							error:function (error){
							}
						});

					});
					
					$("#oculta").on('click',function(e){
							e.preventDefault();
							$('#formPrograma').slideDown('fast');
							$('#oculta').hide();
						});

					$('#cancela').on('click',function(e){
						e.preventDefault();
						$('#formPrograma').hide('fast');
						$('#oculta').slideDown('fast');
					});
					

					$('#tablaPrograma').on('click','.elimina', function(e){
							e.preventDefault();

							var id = $(this).attr('data-id'),
								rowUser = $(this),
								respuesta = confirm('Realmente decea eliminar el programa');

								if( respuesta ){
									$.ajax({
										type:'GET',
										url: h.urlBase() +'/admin/programas/'+id+'/eliminar',
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