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
		extract(Input::all());

		$estado = Estado::find(1); // Cambiar por la variable del estado 
						
		$viable = isset($viable) ? $viable : 0;			// seleccionado del select

		$proyecto = Proyecto::create(array(
						'noExpediente' => $noExpediente,
						'avanceFisico' => $avanceFisico,
						'avanceFinanciero' => $avanceFinanciero,
						'noOficioSolicitud' => $noOficio,
						'status' => $status,
						'ubicacion' => 1, //$ubicacion
						'avanceaccion_id' => 1,
						'accionprogramada_id' => 1,
						'inversionprogramada_id' => 1,
						'inversionejercida_id' => 1,
						'aspectos_id' => 1,
						'programas_id' => 1,
						'ubicaciones_id' => 1,
						'carencias_id' => 1,
						'dependencias_id' => 1,
						'users_id' => 1
					));
		$datosGenerales = DatosGenerale::create(array(
						'nombreBeneficiario' => $nombreBeneficiario,
						'rfc' => $rfc,
						'curp' => $curp,
						'correo' => $correo, 
						'telefono' => $telefono,
						'celular' => $celular,
						'viable' => $viable,
						'descripcion' => 'descripcion', // $descripcion
						'evento' => 'evento', 			// $evento,
						'fechaEvento' => 'fechaEvento', // $fechaEvento,
						'lugarEvento' => 'lugarEvento', //$lugarEvento,	
						'proyectos_id' => $proyecto->id // ( ID ) del proyecto					
		));

		$proyecto->estados()->attach(1);

		if ($proyecto) {
			return Response::json(array('status' => true, 'data' => $proyecto));				# code...
		}

		return Response::json(array('status' => false));

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