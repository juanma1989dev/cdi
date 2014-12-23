(function( helper ){

	App.Models.User = function() {

		this.store= function(user) {

			var config = {
				type : 'POST',
				url : '/users/admin',
				data: user		
			};
			
			return helper.ajax(config);

			/*				
			

			if(!data.success){
				info.append('<li>'+ data.errors[Object.keys(data.errors)[0]] +'</li>');
				info.slideDown();	
			}else{	
			}
				
			
			*/
		};

		this.destroy = function(id){
			var config = {
				type: 'GET',
				url: '/users/admin/'+ id +'/eliminar',
				data : {}
			};

			return helper.ajax(config);
		};

	};

})( new App.Helpers() );