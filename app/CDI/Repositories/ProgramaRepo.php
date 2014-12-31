<?php namespace CDI\Repositories;
	
use CDI\Entities\Programa;
use CDI\Managers\ProgramaManager;

class ProgramaRepo extends BaseRepo 
{
	public function getModel ()
	{
		return new Programa;
	}

	public function getManager()
	{
		return new ProgramaManager ( $this->getModel() );
	}	
}
	
?>