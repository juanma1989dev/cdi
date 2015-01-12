<?php namespace CDI\Managers; 

class AccionProgramadaManager extends BaseManagers
{
	public function getRules(){
		return array(
			'inicioEjecucion' => 'required',
			'finEjecucion'    => 'required',
			'metaCNCH'        => 'required',
			'metaCDI'         => 'required',
			'beneficiariosM' => 'required',
			'beneficiariosH' => 'required',
			'acciones_id'     => 'required'
		);
	}
}

?>