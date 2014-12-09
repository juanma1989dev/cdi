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

/* Usuarios */
Route::post('/login', 'LoginController@login');
Route::get('/capturista','CapturistaController@create');
Route::get('/admin','AdminUsuarioController@admin');
Route::get('/users/admin','AdminUsuarioController@create');//creo usuarios
Route::post('/users/admin','AdminUsuarioController@store');//agrego y muestro  usuarios
Route::get('/users/admin/{id}',['as' =>'adminUserEdit', 'uses' =>'AdminUsuarioController@edit']);//edito usuarios 
Route::post('/users/admin/{id}','AdminUsuarioController@update');//actualizo usuarios
Route::get('/users/admin/{id}/eliminar','AdminUsuarioController@delete');//Elimino usuarios

/* Estados */
Route::get('/admin/estado','EstadoController@create');
Route::post('/admin/estado','EstadoController@store');
Route::get('/admin/estado/{id}',['as' =>'adminEstadoEdit', 'uses' =>'EstadoController@edit']);
Route::post('/admin/estado/{id}','EstadoController@update');
Route::get('/admin/estado/{id}/eliminar','EstadoController@delete');

/* Municipios */
Route::get('/admin/municipio','MunicipioController@create');
Route::post('/admin/municipio','MunicipioController@store');
Route::get('/admin/municipio/{id}',['as' =>'adminMunicipioEdit', 'uses' =>'MunicipioController@edit']);
Route::post('/admin/municipio/{id}','MunicipioController@update');
Route::get('/admin/municipio/{id}/eliminar','MunicipioController@delete');

/* Localidades*/
Route::get('/admin/localidad','LocalidadesController@create');
Route::post('/admin/localidad','LocalidadesController@store');
Route::get('/admin/localidad/{id}',['as' =>'adminLocalidadEdit', 'uses' =>'LocalidadesController@edit']);
Route::post('/admin/localidad/{id}','LocalidadesController@update');
Route::get('/admin/localidad/{id}/eliminar','LocalidadesController@delete');

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