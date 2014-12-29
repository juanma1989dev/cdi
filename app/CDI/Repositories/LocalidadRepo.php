<?php namespace CDI\Repositories;
	
use CDI\Entities\Localidad;
use CDI\Managers\LocalidadManager;

class LocalidadRepo extends BaseRepo 
{
	public function getModel ()
	{
		return new Localidad;
	}

	public function getManager ()
	{
		return new LocalidadManager ( $this->getModel() );
	}
}
	
?>