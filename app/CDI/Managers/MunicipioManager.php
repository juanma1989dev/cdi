<?php namespace CDI\Managers;

class MunicipioManager extends BaseManagers
{
	public function getRules ()
	{
		return array(
			'id' 	=> 'required',
			'nombre'=> 'required',
			'ccdi' 	=> 'required',
			'cnch'	=> 'required'
		);
	}
}

?>