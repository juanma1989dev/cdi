<?php 

use CDI\Repositories\MunicipioRepo;

class  MunicipioController extends BaseController
{
	protected $municipioRepo;

	public function __construct( MunicipioRepo $municipioRepo )
	{
		$this->municipioRepo = $municipioRepo;
	}

	public function create()
	{
		$municipios = Municipio::orderBy('id','DESC')->get();
		return View::make('/users/admin/municipio/formMunicipio',compact('municipios'));
	}

	public function store()
	{
		return ResponseData::json( $this->municipioRepo, 'store', [ Input::all() ],  'municipio' );			
	}

	public function edit( $id )
	{
		$municipio = $this->municipioRepo->findOne( $id );
		return View::make('users/admin/municipio/formMod',compact('municipio'));
	}

	public function update( $id )
	{	
		return ResponseData::html( $this->municipioRepo, 'update', '/admin/municipio', [$id, Input::all()]);			
	}

	public function delete( $id )
	{
		return ResponseData::json( $this->municipioRepo, 'delete', [ $id ] );
	}		
}		

?>