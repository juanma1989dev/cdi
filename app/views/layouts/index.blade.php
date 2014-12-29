<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CDI</title>
	{{ HTML::style('css/normalize.css') }}
	{{ HTML::style('css/ico-moon.css') }}
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
	<script>
	 	
	</script>
	
	{{ HTML::script('js/vendors/jquery-1.11.1.js') }}
	{{ HTML::script('js/vendors/mustache.js') }}
	

	{{ HTML::script('js/app/init.js') }}

	{{ HTML::script('js/Helpers.js') }}
	
	<!-- App Models -->
	{{ HTML::script('js/app/models/usuario.js') }}

	<!-- App Controllers -->
	{{ HTML::script('js/app/controllers/usuario.js') }}

	<!-- App Views -->
	{{ HTML::script('js/app/views/usuario.js') }}

	
	@yield('scripts')
	
</body> 
</html>
