<?php namespace CDI\Entities;

class Proyecto extends \Eloquent 
{

	protected $fillable = array(
		'noExpediente', 'status', 'avanceaccion_id',
		'accionprogramada_id', 'inversionprogramada_id', 'inversionejercida_id',
		'aspectos_id', 'programas_id', 'ubicaciones_id',
		'carencias_id', 'dependencias_id', 'users_id'
	);

	public function estados() 
	{
		return $this->belongsToMany('Estado', 'estado_proyecto', 'proyecto_id', 'estado_id');
	}

	public function datosGenerales() 
	{
		return $this->hasOne();
	}

}

?>