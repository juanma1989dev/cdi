<?php namespace CDI\Managers;

class InversionProgramadaManager extends BaseManagers
{
	public function getRules(){
		return array(
			'federalP'   => 'required',
			'estatalP'   => 'required',
			'municipalP' => 'required',
			'otrosP'     => 'required'
		);
	}
} 

?>