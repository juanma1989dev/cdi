<?php namespace CDI\Repositories;

use CDI\Entities\AvanceAccion;
use CDI\Managers\AvanceAccionManager;

class AvanceAccionRepo extends BaseRepo
{
	public function getModel()
	{
		return new AvanceAccion;
	}

	public function getManager(){
		return new AvanceAccionManager( $this->getModel() );
	}
}
	
?>