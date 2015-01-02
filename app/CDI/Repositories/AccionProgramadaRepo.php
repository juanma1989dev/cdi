<?php namespace CDI\Repositories;

use CDI\Entities\AccionProgramada;
use CDI\Managers\AccionProgramadaManager;

class AccionProgramadaRepo extends BaseRepo
{
	public function getModel()
	{
		return new AccionProgramada();
	}

	public function getManager()
	{
		return new AccionProgramadaManager( $this->getModel() );
	}
}

?>