

 	
	App.Helpers = function() {

		this.render = function(template, elemRender) {
			$.get('templates/'+ template +'.html', function(temp) {
				$(elemRender).append( temp );				
			});
		};

		this.ajax = function(config, cb) {
			var response = $.ajax({
				type : config.type,
				url  : App.Helpers.baseUrl() + config.url,
				data : config.data,
				dataType: 'json',
				success : cb
			});
		};
		
		this.callback = function(data, textStatus, xhr){
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

		this.log = function (msg){
			console.log(msg);
		};

		this.urlBase = function(){
			return 'http://localhost/projects/cdi/public';
		};

	} 

