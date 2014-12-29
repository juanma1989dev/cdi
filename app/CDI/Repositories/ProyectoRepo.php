<?php namespace CDI\Repositories;
	
use CDI\Entities\Proyecto;
use CDI\Managers\ProyectoManager;

class ProyectoRepo extends BaseRepo 
{
	public function getModel ()
	{
		return new Proyecto;
	}

	public function getManager ()
	{
		return new ProyectoManager ( $this->getModel() );
	}
}
	
?>