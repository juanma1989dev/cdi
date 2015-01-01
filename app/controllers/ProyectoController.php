<?php 

use CDI\Repositories\ProyectoRepo;
use CDI\Repositories\MunicipioRepo;
use CDI\Repositories\LocalidadRepo;
use CDI\Repositories\SubProgramaRepo;

class ProyectoController extends BaseController {

	protected $proyectoRepo;
	protected $municipioRepo;
	protected $localidadRepo;
	protected $subProgramaRepo;

	public function __construct( 
		ProyectoRepo $proyectoRepo, MunicipioRepo $municipioRepo,
		LocalidadRepo $localidadRepo, SubProgramaRepo $subProgramaRepo
	)
	{
		$this->proyectoRepo    = $proyectoRepo;
		$this->municipioRepo   = $municipioRepo;
		$this->localidadRepo   = $localidadRepo; 
		$this->subProgramaRepo = $subProgramaRepo;
	}

	public function index() 
	{
		return View::make('users/capturista/index');
	}

	public function create()
	{
		$selects = $this->proyectoRepo->poulateSelects();
		return View::make('users/capturista/formProyecto', $selects);
	}

	public function store()
	{
		return ResponseData::json( $this->proyectoRepo, 'store', [ Input::all() ], 'proyecto');	
	}

	public function municipios()
	{
		return Response::json( $this->municipioRepo->findAll() ); //cambiar  
	}

	public function localidades()
	{
		return Response::json( $this->localidadRepo->findAll() ); //cambiar 
	}

	public function subProgramas(){
		return Response::json( $this->subProgramaRepo->findAll() ); //cambiar 
	}

}	

?>