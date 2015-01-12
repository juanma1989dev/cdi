<?php namespace CDI\Repositories;

use CDI\Entities\Dependencia;
use CDI\Managers\DependenciaManager; 

class DependenciaRepo extends BaseRepo
{
	public function getModel()
	{
		return new Dependencia;
	}

	public function getManager()
	{
		return new DependenciaManager( $this->getModel() );
	}
}

?>