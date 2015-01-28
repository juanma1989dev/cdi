<?php

/*
|--------------------------------------------------------------------------
| Rutas de la Aplicacion
|--------------------------------------------------------------------------
*/

/* Ruta de Inicio  de la aplicaion */
Route::get('/', function() {
	return View::make('index');
});
Route::get('/recuperarPassword', 'RecuperarPasswordController@index');
/* Login y Logout  */
Route::post('/login', ['as' => 'login', 'uses' => 'LoginController@login']);
//Route::post('/login', 'LoginController@login');


/*Rutas para el usuario Administrador*/
require (__DIR__ . '/routes/admin.php');


/* Rutas para el usuario Capturistra */
Route::get('/capturista', 'ProyectoController@index');

Route::get('/capturista/capturaProyecto', 'ProyectoController@create');
Route::post('/capturista/capturaProyecto', 'ProyectoController@store');

//Route::get('/capturista','CapturistaController@create');




/* Rutas para el Super-Usuario */
Route::get('/superUsuario', 'SuperUsuarioController@index');





/* Rutas para cargar selects del Fromulario de proyectos */

Route::get('/proyecto/cargarMunicipios', 'ProyectoController@municipios');
Route::get('/proyecto/cargarLocalidades', 'ProyectoController@localidades');
Route::get('/proyecto/cargarSubProgramas', 'ProyectoController@subProgramas');










/* 
	use CDI\Ejemplo;



    Route::get('/', //function() {
	$usuario = User::create(array(
			'nombres' => 'Juan Manuel',
			'apellidoP' => 'Guzman',
			'apellidoM' => 'Rodriguez',
			'usuario'   => 'juanMa2',
			'contrasenia' => Hash::make('123'),
			'nivel' => 'administrado'
	));

	$slug = Str::slug('Juan ManuEl Guzmán Rodríguez 45 niños');
	dd($slug);
	dd($usuario);

	//return View::make('index');

	'UseController@index'

//}
);       */


Route::get('/pdf', function(){	

	$proyectos = CDI\Entities\Proyecto::all();

	$v = View::make('pdf', compact('proyectos'));


	$a = PDF2::load($v, 'A2', 'landscape')->show();

	return $a;

});


Route::get('/pdf2', function(){	

	$v = View::make('pdf2');


	$a = PDF2::load($v, 'A4', 'landscape')->show();

	return $a;
});