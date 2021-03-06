<?php 

Route::get('/admin', 'AdminController@index');
Route::get('/admin/usuarios', 'UsuariosController@index');

/*Rutas para Usuarios */
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

/* Rutas para catalogo de Ubicaciones  */

Route::get('/admin/ubicaciones','UbicacionesController@create');
Route::post('/admin/ubicaciones','UbicacionesController@store');
Route::get('/admin/ubicaciones/{id}',['as' =>'adminUbicacionEdit', 'uses' =>'UbicacionesController@edit']);
Route::post('/admin/ubicaciones/{id}','UbicacionesController@update');
Route::get('/admin/ubicaciones/{id}/eliminar','UbicacionesController@delete');

/* Rutas para catalogo de RegionesIndigenas */

Route::get('/admin/regionindigena','RegIndigenaController@create');
Route::post('/admin/regionindigena','RegIndigenaController@store');
Route::get('/admin/regionindigena/{id}',['as' =>'adminRegIndinEdit', 'uses' =>'RegIndigenaController@edit']);
Route::post('/admin/regionindigena/{id}','RegIndigenaController@update');
Route::get('/admin/regionindigena/{id}/eliminar','RegIndigenaController@delete');

/* Rutas para catalogo de Regiones Oaxaca  */

Route::get('/admin/regionoaxaca','RegionoaxController@create');
Route::post('/admin/regionoaxaca','RegionoaxController@store');
Route::get('/admin/regionoaxaca/{id}',['as' =>'adminRegOaxacaEdit', 'uses' =>'RegionoaxController@edit']);
Route::post('/admin/regionoaxaca/{id}','RegionoaxController@update');
Route::get('/admin/regionoaxaca/{id}/eliminar','RegionoaxController@delete');