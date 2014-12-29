<?php

use CDI\Repositories\LocalidadRepo;

class LocalidadesController extends BaseController
{
	protected $localidadRepo;

	public function __construct ( LocalidadRepo $localidadRepo )
	{
		$this->localidadRepo = $localidadRepo;
	}

	public function create()
	{
		$localidades = Localidad::all();
		return View::make('users/admin/localidad/formlocalidad', compact('localidades') );
	}

	public function store()
	{
		return ResponseData::json( $this->localidadRepo, 'store', [ Input::all() ], 'localidad' );
	}

	public function edit( $id )
	{
		$localidad = $this->localidadRepo->findOne( $id );
		return View::make('users/admin/localidad/formModLoc',compact('localidad'));
	}

	
	public function update( $id )  
	{
		return ResponseData::html( $this->localidadRepo, 'update', [ $id, Input::all() ] );			
	}

	public function delete($id)
	{
		$localidad=Localidad::find($id);
		if( $localidad->delete() )
		{
			return Response::json(array( 'status' => 'ok'));
		}

	}
} 

?>