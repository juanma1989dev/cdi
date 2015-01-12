<?php namespace CDI\Repositories;

use CDI\Entities\Ubicaciones;
use CDI\Managers\UbicacionesManager;

class UbicacionesRepo extends BaseRepo
{
	public function getModel()
	{
		return new Ubicaciones;
	}

	public function getManager()
	{
		return new UbicacionesManager( $this->getModel() );
	}
}

?>