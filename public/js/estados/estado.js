$(document).on('ready', function(){


			$('#formEdo').on('submit', function(e){
				e.preventDefault();

				var estado = {
					id : $('#id').val(),
				    nombre: $('#nombre').val(),
				};

				$.ajax({
					type : 'POST',
					url : App.Helpers.urlBase + '/admin/estado',
					data: estado,
					dataType: 'json',
					success: function(estado){
						console.log(estado);
						var info = $('.info');
						info.hide().empty();
						if(!estado.success){
							info.append('<li>'+ $(estado.errors).toArray()[0] +'</li>');
							info.slideDown();	
						}else{
							info.find('ul').append('<li>Agregado correctamente</li>');
							info.slideDown();

							estado.estado.urlEdit = App.Helpers.urlBase + '/admin/estado'+ estado.estado.id; 

							var template=$('#filaEstado-template').html();
							Mustache.parse(template);
							var render = Mustache.render(template,estado.estado);
							$('#tablaEstado').prepend(render);

							$('#id').val('');
					     	$('#nombre').val('');
					   	}
					 },
					error:function (error){
					}
				});

			});

				$("#estado").on('click',function(e){
					e.preventDefault();
					$('#formEdo').slideDown('fast');
					$('#estado').hide();
				});

				$('#cancela').on('click',function(e){
					e.preventDefault();
					$('#formEdo').slideUp('fast');
					$('#estado').slideDown('fast');
				});




					$('#tablaEstado').on('click', '.elimina', function(e){
						e.preventDefault();

						var id = $(this).attr('data-id'),
							rowUser = $(this),
							respuesta = confirm('Realmente decea eliminar el estado');

							if( respuesta ){
								$.ajax({
									type:'GET',
									url: App.Helpers.urlBase +'/admin/estado/'+id+'/eliminar',
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