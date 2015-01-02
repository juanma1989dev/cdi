$(document).on('ready', function(){

	var h = new App.Helpers(); 

		$('#formRegOax').on('submit', function(e){
						e.preventDefault();

						var regoaxaqueña = {
							id :     $('#id').val(),
						    nombre :   $('#nombre').val(),
						    };

						$.ajax({
							type : 'POST',
							url : h.urlBase() + '/admin/regionoaxaca',
							data: regoaxaqueña,
							dataType: 'json',
							success: function(regoaxaqueña){
								console.log(regoaxaqueña);
								var info = $('.info');
								info.hide().empty();
								if(!regoaxaqueña.success){
									info.append('<li>'+ $(regoaxaqueña.errors).toArray()[0] +'</li>');
									info.slideDown();
									}else{
									info.find('ul').append('<li>Agregado correctamente</li>');
									info.slideDown();

									regoaxaqueña.regoaxaqueña.urlEdit = h.urlBase() + '/admin/regionoaxaca/'+ regoaxaqueña.regoaxaqueña.id; 

									var template=$('#filaRegindigena-template').html();
									Mustache.parse(template);
									var render = Mustache.render(template,regoaxaqueña.regoaxaqueña);
									$('#tablaRegOax').prepend(render);
									$('#id').val('');
							     	$('#nombre').val('');
							     	$('#formRegOax').slideUp();
							     	$('#oculta').slideDown();
								}
							 },
							error:function (error){
							}
						});

					});
					
					$("#oculta").on('click',function(e){
							e.preventDefault();
							$('#formRegOax').slideDown('fast');
							$('#oculta').hide();
						});

					$('#cancela').on('click',function(e){
						e.preventDefault();
						$('#formRegOax').hide('fast');
						$('#oculta').slideDown('fast');
					});
					

					$('#tablaRegOax').on('click','.elimina', function(e){
							e.preventDefault();

							var id = $(this).attr('data-id'),
								rowUser = $(this),
								respuesta = confirm('Realmente decea eliminar la region oaxaqueña');

								if( respuesta ){
									$.ajax({
										type:'GET',
										url: h.urlBase() +'/admin/regionoaxaca/'+id+'/eliminar',
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