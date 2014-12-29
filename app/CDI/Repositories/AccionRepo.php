<?php namespace CDI\Repositories;
	
use CDI\Entities\Accion;
use CDI\Managers\AccionManager;

class AccionRepo extends BaseRepo 
{
	public function getModel()
	{
		return new Accion;
	}

	public function getManager()
	{
		return new AccionManager ( $this->getModel() );
	}
}
	
?>