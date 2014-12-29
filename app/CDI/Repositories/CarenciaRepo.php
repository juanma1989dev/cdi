<?php namespace CDI\Repositories;
	
use CDI\Entities\Carencia;
use CDI\Managers\CarenciaManager;

class CarenciaRepo extends BaseRepo 
{
	public function getModel ()
	{
		return new Carencia;
	}

	public function getManager ()
	{
		return new CarenciaManager ( $this->getModel() );
	}
}
	
?>