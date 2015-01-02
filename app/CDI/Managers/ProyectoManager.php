<?php namespace CDI\Managers;

class ProyectoManager extends BaseManagers
{
	public function getRules ()
	{
		return array(
			'noExpediente' => 'required|integer',
			'avanceFisico' => 'required|integer',
			'avanceFinanciero' => 'required|integer',
			'avanceFinanciero' => 'required|integer',
			'noOficioSolicitud' => 'required|integer',
			'status' => 'required',
			'ubicacion' => 'required',
			'avanceaccion_id' => 'required'
		);
	}
}

?>



