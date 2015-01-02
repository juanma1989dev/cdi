<?php namespace CDI\Managers;
	
class AvanceAccionManager extends BaseManagers
{
	public function getRules()
	{
		return array(
			'avanceCantidad' => 'required',
			'beneficiariosH' => 'required',
			'beneficiariosM' => 'required'
		);
	}
}

?>