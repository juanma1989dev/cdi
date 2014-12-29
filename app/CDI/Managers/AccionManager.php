<?php namespace CDI\Managers;

class AccionManager extends BaseManagers
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