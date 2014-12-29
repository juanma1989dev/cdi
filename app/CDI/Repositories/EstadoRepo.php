<?php namespace CDI\Repositories;
	
use CDI\Entities\Estado;
use CDI\Managers\EstadoManager;

class EstadoRepo extends BaseRepo 
{
	public function getModel ()
	{
		return new Estado;
	}

	public function getManager ()
	{
		return new EstadoManager ( $this->getModel() );
	}
}
	
?>