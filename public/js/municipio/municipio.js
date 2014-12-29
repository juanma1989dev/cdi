$(document).on('ready', function(){
var h = new App.Helpers();
	$('#formMuni').on('submit', function(e){
		e.preventDefault();


		var municipio = {
			id:      $('#id').val(),
			nombre : $('#nombre').val(),
		    ccdi :   $('#ccdi').val(),
		    cnch :   $('#cnch').val(),
		    };

		$.ajax({
			type : 'POST',
			url : h.urlBase() + '/admin/municipio',
			data: municipio,
			dataType: 'json',
			success: function(municipio){
				console.log(municipio);
				var info = $('.info');
				info.hide().empty();
				if(!municipio.success){
					info.append('<li>'+ $(municipio.errors).toArray()[0] +'</li>');
					info.slideDown();
				}else{
					info.find('ul').append('<li>Agregado correctamente</li>');
					info.slideDown();
					municipio.municipio.urlEdit = h.urlBase() + '/users/admin/'+ municipio.municipio.id; 
					var template=$('#filaMunicipio-template').html();
					Mustache.parse(template);
					var render = Mustache.render(template,municipio.municipio);
					$('#tablaMunicipio').prepend(render);
					$('#id').val('');
					$('#nombre').val('');
			     	$('#ccdi').val('');
			     	$('#cnch').val('');
				    $('#formMuni').slideUp();
				    $('#oculta').slideDown();
				}
			 },
			error:function (error){
			}
		});

});
		
		
	$("#oculta").on('click',function(e){
			e.preventDefault();
			$('#formMuni').slideDown('fast');
			$('#oculta').hide();
		});

	$('#cancela').on('click',function(e){
		e.preventDefault();
		$('#formMuni').hide('fast');
		$('#oculta').slideDown('fast');
	});
			
	$('#tablaMunicipio').on('click', '.elimina', function(e){
		e.preventDefault();
		var id = $(this).attr('data-id'),
			rowUser = $(this),
			respuesta = confirm('Realmente decea eliminar este municipio');

		if( respuesta ){
			debugger
			$.ajax({
				type:'GET',
				url: h.urlBase() +'/admin/municipio/'+id+'/eliminar',
				data : {},
				dataType:'json',
				success:function(data){
					debugger;
					rowUser.closest('tr').remove();
				},
				error: function(error){

				}
			});
		}













	});


});


				