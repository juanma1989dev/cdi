<?php namespace CDI\Managers;

class InversionProgramadaManager extends BaseManagers
{
	public function getRules(){
		return array(
			'federal'   => 'required',
			'estatal'   => 'required',
			'municipal' => 'required',
			'otros'     => 'required'
		);
	}
} 

?>