<?php namespace CDI\Repositories;

use CDI\Entities\DatosGenerales;
use CDI\Managers\DatosGeneralesManager;

class DatosGeneralesRepo extends BaseRepo
{
	public function getModel()
	{
		return new DatosGenerales;
	}

	public function getManager()
	{
		return new DatosGeneralesManager( $this->getModel() );
	}
}

?>