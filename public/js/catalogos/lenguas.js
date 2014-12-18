$(document).on('ready', function(){

		$('#formLengua').on('submit', function(e){
						e.preventDefault();

						var lengua = {
							id :     $('#id').val(),
						    nombre :   $('#nombre').val(),
						    };

						$.ajax({
							type : 'POST',
							url : App.Helpers.urlBase + '/admin/lenguas',
							data: lengua,
							dataType: 'json',
							success: function(lengua){
								console.log(lengua);
								var info = $('.info');
								info.hide().empty();
								if(!lengua.success){
									info.append('<li>'+ $(lengua.errors).toArray()[0] +'</li>');
									info.slideDown();	
								}else{
									info.find('ul').append('<li>Agregado correctamente</li>');
									info.slideDown();

									lengua.lengua.urlEdit = App.Helpers.urlBase + '/admin/carencias/'+ lengua.lengua.id; 

									var template=$('#filaLengua-template').html();
									Mustache.parse(template);
									var render = Mustache.render(template,lengua.lengua);
									$('#tablaLengua').prepend(render);
									$('#id').val('');
							     	$('#nombre').val('');
							     	$('#formLengua').slideUp();
							     	$('#oculta').slideDown();
								}
							 },
							error:function (error){
							}
						});

					});
					
					$("#oculta").on('click',function(e){
							e.preventDefault();
							$('#formLengua').slideDown('fast');
							$('#oculta').hide();
						});

					$('#cancela').on('click',function(e){
						e.preventDefault();
						$('#formLengua').hide('fast');
						$('#oculta').slideDown('fast');
					});
					

					$('#tablaLengua').on('click','.elimina', function(e){
							e.preventDefault();

							var id = $(this).attr('data-id'),
								rowUser = $(this),
								respuesta = confirm('Realmente decea eliminar la depdencia');

								if( respuesta ){
									$.ajax({
										type:'GET',
										url: App.Helpers.urlBase +'/admin/lenguas/'+id+'/eliminar',
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