<?php namespace CDI\Repositories;
	
use CDI\Entities\Proyecto;
use CDI\Managers\ProyectoManager;

class ProyectoRepo extends BaseRepo 
{
	protected $estadoRepo;
	protected $programaRepo;
	protected $carenciaRepo;
	protected $accionRepo;
	protected $ubicacionRepo;
	protected $dependenciaRepo;

	public function getModel()
	{
		return new Proyecto();
	}

	public function getManager()
	{
		return new ProyectoManager( $this->getModel() );
	}


	public function __construct( 
		EstadoRepo $estadoRepo, ProgramaRepo $programaRepo,	CarenciaRepo $carenciaRepo, 
		AccionRepo $accionRepo, UbicacionesRepo $ubicacionRepo, DependenciaRepo $dependenciaRepo
	)
	{
		$this->estadoRepo      = $estadoRepo;
		$this->programaRepo    = $programaRepo;
		$this->carenciaRepo    = $carenciaRepo;
		$this->accionRepo      = $accionRepo;
		$this->ubicacionRepo   = $ubicacionRepo; 
		$this->dependenciaRepo = $dependenciaRepo;
	}
	

	public function poulateSelects()
	{
		$estados = $this->estadoRepo->populate( ['nombre', 'id'] );
		$programas = $this->programaRepo->populate( ['nombre', 'id' ] );
		$carencias = $this->carenciaRepo->populate( ['nombre', 'id'] );
		$acciones = $this->accionRepo->populate( ['nombre', 'id'] );
		$ubicacion = $this->ubicacionRepo->populate( ['nombre', 'id'] ); 
		$dependencias = $this->dependenciaRepo->populate( ['nombre', 'id'] );

		$unidadMedida = array('1' => 'Uno', '2' => 'Dos'); // checar bien si sera estatico o vendra de la base de datos
		
		$status = array('0' => 'Pendiente', '1' => 'Finalizado' );	


		$selects = compact('estados', 'programas', 'carencias', 'status',
						   'acciones', 'ubicacion', 'dependencias', 'unidadMedida');

		return $selects;
	}

	
}
	
?>