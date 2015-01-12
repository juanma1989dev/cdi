<?php  namespace CDI\Managers;

class UbicacionesManager extends BaseManagers
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