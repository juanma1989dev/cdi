<?php namespace CDI\Managers;

class CarenciaManager extends BaseManagers
{
	public function getRules ()
	{
		return array(
			'id'=> 'required',
			'nombre'=> 'required'
		);
	}
}

?>