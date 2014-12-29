<?php namespace CDI\Repositories;
	
use CDI\Entities\Municipio;
use CDI\Managers\MunicipioManager;

class MunicipioRepo extends BaseRepo 
{
	public function getModel ()
	{
		return new Municipio;
	}

	public function getManager ()
	{
		return new MunicipioManager( $this->getModel() );
	}
}
	
?>