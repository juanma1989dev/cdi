<?php namespace CDI\Managers;

class InversionEjercidaManager extends BaseManagers
{
	public function getRules()
	{
		return array(
			'federalE'   => 'required',
			'estatalE'   => 'required',
			'municipalE' => 'required',
			'otrosE'     => 'required'
		);
	}
}

?>