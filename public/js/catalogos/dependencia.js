$(document).on('ready', function(){
	var h = new App.Helpers();

	$('#formDependencia').on('submit', function(e){
		e.preventDefault();

		var dependencia = {
			id :     $('#id').val(),
		    nombre :   $('#nombre').val(),
		    };

		$.ajax({
			type : 'POST',
			url : h.urlBase() + '/admin/dependencias',
			data: dependencia,
			dataType: 'json',
			success: function(dependencia){
				console.log(dependencia);
				var info = $('.info');
				info.hide().empty();
				if(!dependencia.success){
					info.append('<li>'+ $(dependencia.errors).toArray()[0] +'</li>');
					info.slideDown();	
				}else{
					info.find('ul').append('<li>Agregado correctamente</li>');
					info.slideDown();

					dependencia.dependencia.urlEdit = h.urlBase() + '/admin/carencias/'+ dependencia.dependencia.id; 

					var template=$('#filaDependencia-template').html();
					Mustache.parse(template);
					var render = Mustache.render(template,dependencia.dependencia);
					$('#tablaDependencia').prepend(render);
					$('#id').val('');
			     	$('#nombre').val('');
			     	$('#formDependencia').slideUp();
			     	$('#oculta').slideDown();
				}
			 },
			error:function (error){
			}
		});

	});
				
	$("#oculta").on('click',function(e){
			e.preventDefault();
			$('#formDependencia').slideDown('fast');
			$('#oculta').hide();
		});

	$('#cancela').on('click',function(e){
		e.preventDefault();
		$('#formDependencia').hide('fast');
		$('#oculta').slideDown('fast');
	});
		

	$('#tablaDependencia').on('click','.elimina', function(e){
		e.preventDefault();

		var id = $(this).attr('data-id'),
			rowUser = $(this),
			respuesta = confirm('Realmente decea eliminar la depdencia');

			if( respuesta )
			{
				$.ajax({
					type:'GET',
					url: h.urlBase() +'/admin/dependencias/'+id+'/eliminar',
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