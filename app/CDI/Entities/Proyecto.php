<?php namespace CDI\Entities;

class Proyecto extends \Eloquent 
{

	protected $fillable = array(
		'noExpediente', 'status', 'avanceaccion_id',
		'accionprogramada_id', 'inversionprogramada_id', 'inversionejercida_id',
		'aspectos_id', 'programas_id', 'ubicaciones_id',
		'carencias_id', 'dependencias_id', 'users_id', 'datosgenerales_id', 'noOficioSolicitud',
		'avanceFisico', 'avanceFinanciero', 
	);

	public function estados()  //esto ya no existe checar
	{
		return $this->belongsToMany('Estado', 'estado_proyecto', 'proyecto_id', 'estado_id');
	}

	public function user()
	{
		return $this->hasOne('CDI\Entities\Users', 'id', 'users_id');
	}

	public function datosGenerales() 
	{
		return $this->hasOne('CDI\Entities\DatosGenerales', 'id', 'datosgenerales_id');
	}

	public function inversionProgramada()
	{
		return $this->hasOne('CDI\Entities\InversionProgramada', 'id', 'inversionprogramada_id');
	}

	public function inversionEjercida()
	{
		return $this->hasOne('CDI\Entities\InversionEjercida', 'id', 'inversionejercida_id');
	}

	public function ubicacion()
	{
		return $this->hasOne('CDI\Entities\Ubicaciones', 'id', 'ubicaciones_id');
	}

}

?>