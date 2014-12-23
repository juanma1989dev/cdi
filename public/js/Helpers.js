(function( ){	

	App.Helpers = function() {

		this.render = function(template, elemRender) {
			$.get('templates/'+ template +'.html', function(temp) {
				$(elemRender).append( temp );				
			});
		};

		this.ajax = function(conf) {

			var self = this,
				response;

			var xhr = $.ajax({
				type : conf.type,
				url  : self.urlBase() + conf.url,
				data : conf.data,
				dataType: 'json',
				async: false
			});

			xhr.done(function(data){
				response = data;
			}).fail(function(error){
				response = data;
			});

			return response;
		}
		
		this.callback2 = function(data, textStatus, xhr){
			return data;
		};

		this.cleanForm = function (form){ 

			var texts = $(form).find('input[type="text"]'),
				checkboxs = $(form).find('input[type = "checkbox"]'),
				radios = $(form).find('input[type="radio"]'),
				selects = $(form).find('select'),
				textareas = $(form).find('textarea');

			checkboxs.each(function(i, el ){
				el.checked=false;
			});

			radios.each(function(i, el ){
				el.checked=false;
			});

			selects.each(function(i, el ){
				el.selectedIndex=0;
			});
			
			texts.each(function(i, el ){
				el.value="";
			});

			textareas.each(function(i, el ){
				el.value="";
			});
		};

		this.urlBase = function(){
			return 'http://localhost/projects/cdi/public';
		};

	} 

})();