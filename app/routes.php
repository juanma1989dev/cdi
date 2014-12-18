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

/* Login y Logout  */
Route::post('/login', ['as' => 'login', 'uses' => 'LoginController@login']);

/*Rutas para el usuario Administrador*/
Route::get('/admin', 'AdminController@index');
Route::get('/admin/usuarios', 'UsuariosController@index');

/*Rutas para Usuarios */
Route::post('/login', 'LoginController@login');
Route::get('/capturista','CapturistaController@create');
Route::get('/admin','AdminUsuarioController@admin');
Route::get('/users/admin','AdminUsuarioController@create');//creo usuarios
Route::post('/users/admin','AdminUsuarioController@store');//agrego y muestro  usuarios
Route::get('/users/admin/{id}',['as' =>'adminUserEdit', 'uses' =>'AdminUsuarioController@edit']);//edito usuarios 
Route::post('/users/admin/{id}','AdminUsuarioController@update');//actualizo usuarios
Route::get('/users/admin/{id}/eliminar','AdminUsuarioController@delete');//Elimino usuarios

/*Rutas para Estados */
Route::get('/admin/estado','EstadoController@create');
Route::post('/admin/estado','EstadoController@store');
Route::get('/admin/estado/{id}',['as' =>'adminEstadoEdit', 'uses' =>'EstadoController@edit']);
Route::post('/admin/estado/{id}','EstadoController@update');
Route::get('/admin/estado/{id}/eliminar','EstadoController@delete');

/*Rutas para Municipios */
Route::get('/admin/municipio','MunicipioController@create');
Route::post('/admin/municipio','MunicipioController@store');
Route::get('/admin/municipio/{id}',['as' =>'adminMunicipioEdit', 'uses' =>'MunicipioController@edit']);
Route::post('/admin/municipio/{id}','MunicipioController@update');
Route::get('/admin/municipio/{id}/eliminar','MunicipioController@delete');

/* Rutas para Localidades*/
Route::get('/admin/localidad','LocalidadesController@create');
Route::post('/admin/localidad','LocalidadesController@store');
Route::get('/admin/localidad/{id}',['as' =>'adminLocalidadEdit', 'uses' =>'LocalidadesController@edit']);
Route::post('/admin/localidad/{id}','LocalidadesController@update');
Route::get('/admin/localidad/{id}/eliminar','LocalidadesController@delete');

/* Rutas para Acciones*/
Route::get('/admin/acciones','AccionesController@create');
Route::post('/admin/acciones','AccionesController@store');
Route::get('/admin/acciones/{id}',['as' =>'adminAccionEdit', 'uses' =>'AccionesController@edit']);
Route::post('/admin/acciones/{id}','AccionesController@update');
Route::get('/admin/acciones/{id}/eliminar','AccionesController@delete');

/* Rutas para Catalogo de Carencias*/
Route::get('/admin/carencias','CarenciaController@create');
Route::post('/admin/carencias','CarenciaController@store');
Route::get('/admin/carencias/{id}',['as' =>'adminCarenciaEdit', 'uses' =>'CarenciaController@edit']);
Route::post('/admin/carencias/{id}','CarenciaController@update');
Route::get('/admin/carencias/{id}/eliminar','CarenciaController@delete');

/* Rutas para Catalogo de Dependencias */

Route::get('/admin/dependencias','DependenciaController@create');
Route::post('/admin/dependencias','DependenciaController@store');
Route::get('/admin/dependencias/{id}',['as' =>'adminDependenciaEdit', 'uses' =>'DependenciaController@edit']);
Route::post('/admin/dependencias/{id}','DependenciaController@update');
Route::get('/admin/dependencias/{id}/eliminar','DependenciaController@delete');

/* Rutas para Catalogo de Lenguas */

Route::get('/admin/lenguas','LenguaController@create');
Route::post('/admin/lenguas','LenguaController@store');
Route::get('/admin/lenguas/{id}',['as' =>'adminLenguaEdit', 'uses' =>'LenguaController@edit']);
Route::post('/admin/lenguas/{id}','LenguaController@update');
Route::get('/admin/lenguas/{id}/eliminar','LenguaController@delete');

/* Rutas para catalogo de Programas */

Route::get('/admin/programas','ProgramasController@create');
Route::post('/admin/programas','ProgramasController@store');
Route::get('/admin/programas/{id}',['as' =>'adminProgramaEdit', 'uses' =>'ProgramasController@edit']);
Route::post('/admin/programas/{id}','ProgramasController@update');
Route::get('/admin/programas/{id}/eliminar','ProgramasController@delete');


/* Rutas para el usuario Capturistra */
Route::get('/capturista', 'CapturistaController@index');

Route::get('/capturista/capturaProyecto', 'CapturistaController@create');
Route::post('/capturista/capturaProyecto', 'CapturistaController@crea');

/* Rutas para el Super-Usuario */
Route::get('/superUsuario', 'SuperUsuarioController@index');
















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
	$pdf = PDF::loadView('pdf');
	$pdf->setPaper('A4');
    return $pdf->stream();
});