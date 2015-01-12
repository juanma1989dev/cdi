<?php namespace CDI\Managers;

class DependenciaManager extends BaseManagers
{
	public function getRules()
	{
		return array(
			'id'=> 'required',
			'nombre'=> 'required'
		);
	}
}

?>