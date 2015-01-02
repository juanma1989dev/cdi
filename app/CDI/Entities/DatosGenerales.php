<?php namespace CDI\Entities;

class DatosGenerales extends \Eloquent
{
	protected $table = 'datosgenerales';

	protected $fillable = array('nombreBeneficiario', 'rfc', 'curp', 'correo',
								'telefono', 'celular', 'viable', 'descripcion',
								'evento', 'fechaEvento', 'lugarEvento');
}


?>