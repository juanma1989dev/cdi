<?php namespace CDI\Entities;

class Estado extends \Eloquent
{
	protected $table = 'estados';
	protected $fillable = array('id', 'nombre');
	public    $incrementing  = false;

	public function municipios ()
	{
		return $this->belongsToMany('Municipio','estado_municipio','estado_id','municipio_id');
	}
}

?>