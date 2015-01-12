<?php namespace CDI\Managers;

class DatosGeneralesManager extends BaseManagers
{
	public function getRules()
	{
		return array(
			'nombreBeneficiario' => 'required',
			'rfc' => 'required',
			'curp' => 'required',
			'correo' => 'required',
			'telefono' => 'required',
			'celular' => 'required',
			'viable' => 'required',
			'descripcion' => 'required',
			'evento' => 'required',
			'fechaEvento' => 'required',
			'lugarEvento' => 'required'
		);
	}
}

?>