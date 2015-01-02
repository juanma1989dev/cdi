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
			'avanceaccion_id' => 'required',
			'accionprogramada_id' => 'required',
			'inversionprogramada_id' => 'required',
			'inversionejercida_id' => 'required',
			'aspectos_id'  => 'required',
			'programas_id' => 'required',
			'ubicaciones_id' =>'required',
			'carencias_id'   => 'required',
			'dependencias_id' => 'required',
			'users_id' => 'required'
		);
	}
}

?>



