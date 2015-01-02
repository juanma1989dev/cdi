<?php namespace CDI\Repositories;

use CDI\Entities\InversionEjercida;
use CDI\Managers\InversionEjercidaManager;

class InversionEjercidaRepo extends BaseRepo
{
	public function getModel()
	{
		return new InversionEjercida();
	}

	public function getManager()
	{
		return new InversionEjercidaManager( $this->getModel() );
	}
}

?>