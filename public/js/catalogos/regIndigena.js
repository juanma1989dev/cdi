$(document).on('ready', function(){

		$('#formIndigena').on('submit', function(e){
						e.preventDefault();

						var regindigena = {
							id :     $('#id').val(),
						    nombre :   $('#nombre').val(),
						    };

						$.ajax({
							type : 'POST',
							url : App.Helpers.urlBase + '/admin/regionindigena',
							data: regindigena,
							dataType: 'json',
							success: function(regindigena){
								console.log(regindigena);
								var info = $('.info');
								info.hide().empty();
								if(!regindigena.success){
									info.append('<li>'+ $(regindigena.errors).toArray()[0] +'</li>');
									info.slideDown();
									}else{
									info.find('ul').append('<li>Agregado correctamente</li>');
									info.slideDown();

									regindigena.regindigena.urlEdit = App.Helpers.urlBase + '/admin/regionindigena/'+ regindigena.regindigena.id; 

									var template=$('#filaRegindigena-template').html();
									Mustache.parse(template);
									var render = Mustache.render(template,regindigena.regindigena);
									$('#tablaRegionIndigena').prepend(render);
									$('#id').val('');
							     	$('#nombre').val('');
							     	$('#formIndigena').slideUp();
							     	$('#oculta').slideDown();
								}
							 },
							error:function (error){
							}
						});

					});
					
					$("#oculta").on('click',function(e){
							e.preventDefault();
							$('#formIndigena').slideDown('fast');
							$('#oculta').hide();
						});

					$('#cancela').on('click',function(e){
						e.preventDefault();
						$('#formIndigena').hide('fast');
						$('#oculta').slideDown('fast');
					});
					

					$('#tablaRegionIndigena').on('click','.elimina', function(e){
							e.preventDefault();

							var id = $(this).attr('data-id'),
								rowUser = $(this),
								respuesta = confirm('Realmente decea eliminar la region indigena');

								if( respuesta ){
									$.ajax({
										type:'GET',
										url: App.Helpers.urlBase +'/admin/regionindigena/'+id+'/eliminar',
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