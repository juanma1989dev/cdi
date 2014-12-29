<?php namespace CDI\Managers;

class LocalidadManager extends BaseManagers
{
	public function getRules ()
	{
		return array(
			'id' 	=> 'required',
			'nombre'=> 'required'				
		);
	}
}

?>