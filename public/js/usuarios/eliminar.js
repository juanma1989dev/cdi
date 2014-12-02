
$(document).on('ready',function(){
	$('#tablaUsuarios').on('click', '.elimina', function(e){
		e.preventDefault();

		var id = $(this).attr('data-id'),
			rowUser = $(this),
			respuesta = confirm('Realmente decea eliminar el usuario');

			if( respuesta ){
				$.ajax({
					type:'GET',
					url: App.Helpers.urlBase +'/users/admin/'+id+'/eliminar',
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
