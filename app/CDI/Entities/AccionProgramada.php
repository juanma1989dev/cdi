<?php namespace CDI\Entities;

class AccionProgramada extends \Eloquent
{
	protected $table = 'accionprogramada';

	protected $fillable = array('inicioEjecucion', 'finEjecucion', 'metaCNCH', 'metaCDI'
								'mujeresBeneficiadas', 'hombresBeneficiados', 'acciones_id');
}

?>