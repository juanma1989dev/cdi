<?php namespace CDI\Repositories; 

use CDI\Entities\InversionProgramada;
use CDI\Managers\InversionProgramadaManager;

class InversionProgramadaRepo extends BaseRepo
{
	public function getModel()
	{
		return new InversionProgramada();
	}

	public function getManager()
	{
		return new InversionProgramadaManager( $this->getmodel() );
	}
}

?>