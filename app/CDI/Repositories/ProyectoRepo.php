<?php namespace CDI\Repositories;
	
use CDI\Entities\Proyecto;
use CDI\Managers\ProyectoManager;

class ProyectoRepo extends BaseRepo 
{
	protected $municipioRepo;
	protected $localidadRepo;
	protected $subProgramaRepo;
	protected $estadoRepo;
	protected $programaRepo;
	protected $carenciaRepo;
	protected $accionRepo;

	public function __construct( 
		MunicipioRepo $municipioRepo, LocalidadRepo $localidadRepo,	SubProgramaRepo $subProgramaRepo, 
		EstadoRepo $estadoRepo, ProgramaRepo $programaRepo,	CarenciaRepo $carenciaRepo, 
		AccionRepo $accionRepo
	)
	{
		$this->municipioRepo   = $municipioRepo;
		$this->localidadRepo   = $localidadRepo;
		$this->subProgramaRepo =  $subProgramaRepo;
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
		$status = array('pendiente' => 'Pendiente' );
		$acciones = $this->accionRepo->populate( ['nombre', 'id'] );

		$selects = compact('estados', 'programas', 'carencias', 'status', 'acciones');

		return $selects;
	}

	
}
	
?>