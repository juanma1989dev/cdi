<?php namespace CDI\Repositories;

use CDI\Entities\SubPrograma; 
use CDI\Managers\SubProgramaManager; 

class SubProgramaRepo extends BaseRepo {

	public function getModel()
	{
		return new SubPrograma;
	}

	public function getManager ()
	{
		return new SubProgramaManager( $this->getModel() );
	}


}

?>