<?php namespace CDI\Managers;

class EstadoManager extends BaseManagers
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