<?php namespace CDI\Managers;

class UserManager extends BaseManagers
{
	public function getRules ()
	{
		return  array(
			'nombres'=> 'required',
			'apellidoP'=> 'required',
			'apellidoM'=> 'required',
			'usuario'=> 'required',
			'contrasenia'=> 'required',
			'nivel'=> 'required'
		);
	}
}

?>