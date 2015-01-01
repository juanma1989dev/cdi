<?php namespace CDI\Managers;

class ProgramaManager extends BaseManagers
{
	public function getRules ()
	{
		return array(
			'noExpediente' => 'required',
			'avanceFisico' => 'required',
			'avanceFinanciero' => 'required',
			'noOficioSolicitud' => 'required',
			'status' => 'required'
			//'ubicacion' => 1, //$ubicacion
			//'avanceaccion_id' => 1,
			//'accionprogramada_id' => 1,
			//'inversionprogramada_id' => 1,
			//'inversionejercida_id' => 1,
			//'aspectos_id' => 1,
			//'programas_id' => 1,
			//'ubicaciones_id' => 1,
			//'carencias_id' => 1,
			//'dependencias_id' => 1,
			//'users_id' => 1
		);
	}
}

?>