<?php namespace CDI\Managers; 

class AccionProgramadaManager extends BaseManagers
{
	public function getRules(){
		return array(
			'inicioEjecucion' => 'required',
			'finEjecucion'    => 'required',
			'metaCNCH'        => 'required',
			'metaCDI'         => 'required',
			'mujeresBeneficiadas', => 'required',
			'hombresBeneficiados', => 'required',
			'acciones_id'     => 'required'
		);
	}
}

?>