<?php namespace CDI\Repositories;
	
use CDI\Entities\Proyecto;
use CDI\Managers\ProyectoManager;

class ProyectoRepo extends BaseRepo 
{
	protected $estadoRepo;
	protected $programaRepo;
	protected $carenciaRepo;
	protected $accionRepo;

	public function __construct( 
		EstadoRepo $estadoRepo, ProgramaRepo $programaRepo,	CarenciaRepo $carenciaRepo, 
		AccionRepo $accionRepo
	)
	{
		$this->estadoRepo      = $estadoRepo;
		$this->programaRepo    = $programaRepo;
		$this->carenciaRepo    = $carenciaRepo;
		$this->accionRepo      = $accionRepo;
	}
	
	public function getModel ()
	{
		return new Proyecto;
	}

	public function getManager()
	{
		return new ProyectoManager ( $this->getModel() );
	}

	public function poulateSelects()
	{
		$estados = $this->estadoRepo->populate( ['nombre', 'id'] );
		$programas = $this->programaRepo->populate( ['nombre', 'id' ] );
		$carencias = $this->carenciaRepo->populate( ['nombre', 'id'] );
		$status = array('0' => 'Pendiente', '1' => 'Finalizado' );
		$acciones = $this->accionRepo->populate( ['nombre', 'id'] );

		$ubicacion = array('1' => 'Uno', '2' => 'Dos', '3' => 'Tres'); //datos BD
		$dependencias = array('1' => 'Uno', '2' => 'Dos', '3' => 'Tres'); //datos BD
		$unidadMedida = array('1' => 'Uno', '2' => 'Dos'); //datos BD


		$selects = compact('estados', 'programas', 'carencias', 'status',
						   'acciones', 'ubicacion', 'dependencias', 'unidadMedida');

		return $selects;
	}

	
}
	
?>