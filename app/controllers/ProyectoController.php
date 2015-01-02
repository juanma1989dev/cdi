<?php 

use CDI\Repositories\ProyectoRepo;
use CDI\Repositories\MunicipioRepo;
use CDI\Repositories\LocalidadRepo;
use CDI\Repositories\SubProgramaRepo;


use CDI\Repositories\AvanceAccionRepo;
use CDI\Repositories\AccionProgramadaRepo;
use CDI\Repositories\InversionProgramadaRepo;
use CDI\Repositories\InversionEjercidaRepo;

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
		//obteniendo los datos del formulario
		$data = Input::all();

		//creando el avanceaccion
		$var = new AvanceAccionRepo();
		$accion = $var->store( $data );

		//creando el avanceaccion
		$var2 = new AccionProgramadaRepo();
		$accionPro = $var2->store( $data );

		//creando el inversionprogramada
		$var3 = new InversionProgramadaRepo();
		$inversionProgramada = $var3->store( $data );

		//creando el inversion ejercida 
		$var4 = new InversionEjercidaRepo();
		$inversionEjercida = $var4->store( $data ); 

		//aspectos  < esto debe venir del formulario>
		$data['aspectos_id'] = 1;


		// programas id  < esto viene del combo programas>
		$data['programas_id'] = 12;

		// unicaciones id  < esto viene del combo ubicaciones>
		$data['ubicaciones_id'] = 1;

		// carecnias id  < esto viene del combo carencias>
		$data['carencias_id'] = 90;

		// carecnias id  < esto viene del combo carencias>
		$data['dependencias_id'] = 1;

		$data['avanceaccion_id'] = $accion->id;
		$data['accionprogramada_id'] = $accionPro->id;
		$data['inversionprogramada_id'] = $inversionProgramada->id;
		$data['inversionejercida_id']   = $inversionEjercida->id;


		$data['users_id']   = 12;  //usuario logueado


		

		//creando el proyecto
		$proyecto = $this->proyectoRepo->store( $data );


		dd( $proyecto );
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