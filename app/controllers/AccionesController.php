<?php 

use CDI\Repositories\AccionRepo;

class AccionesController extends BaseController
{
	protected $accionRepo;

	public function __construct ( AccionRepo $accionRepo )
	{
		$this->accionRepo = $accionRepo; 
	}

	public function create(){
		$acciones=Accion::orderBy('id','DESC')->get();
		return View::make('/users/admin/acciones/formAccion',compact('acciones'));
	}

	public function store()
	{
		return ResponseData::json( $this->accionRepo, 'store', [ Input::all()] , 'accion' );
	}

	public function edit($id)
	{
		$accion= $this->accionRepo->findOne( $id );
		return View::make('/users/admin/acciones/formModAccion',compact('accion'));
	}

	public function update( $id )
	{
		return ResponseData::html( $this->accionRepo, 'update', '/admin/acciones', [ $id, Input::all() ] );	
	}

	public function delete( $id )
	{
		return ResponseData::json( $this->accionRepo, 'delete', [ $id ]);			
	}
}

?>