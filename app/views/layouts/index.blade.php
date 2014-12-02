<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CDI</title>
	{{ HTML::style('css/normalize.css') }}
	{{ HTML::style('css/style.css') }}
	{{ HTML::style('css/responsive.css') }}

</head>
<body>
	<header>
		<a href="{{URL::to('/')}}"><img src="{{ asset('images/logoCDI.png') }}" alt="Logo del CDI" id="logoCDI"></a>
		<h1>Comisión para el Desarrollo de los Pueblos Indigenas</h1>
	</header>
		@yield('main')
		@yield('usuarios')
	<footer>
		<p>
			Av. Heroico Colegio Militar #904, Colonia Reforma Centro. Tel (952)- xxx - xx - xx <br>
			CDI. COMISIÓN NACIONAL PARA EL DESARROLLO DE LOS PUEBLOS INDÍGENAS © 2014
		</p>
		<img src="{{ asset('images/logoGobiernoR.png') }}" id="logoGobiernoR">
	</footer>
	{{ HTML::script('js/jquery-1.11.1.js') }}
	{{HTML::script('js/mustache.js')}}
	<script>
	 	window.App = {};
	 	App.Helpers ={};
		App.Helpers.urlBase = "{{ URL::to('') }}";


		
		App.Helpers.cleanform = function (form){
			var checkboxs = $(form).children('input[type = "checkbox"]'),
				radios = $(form).children('input[type="radio"]'),
				selects = $(form).children('select'),
				textareas = $(form).children('textarea'),
				texts = $(form).children('input[type="text"]');


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
		}


	</script>
	@yield('scripts')
</body> 
</html>
