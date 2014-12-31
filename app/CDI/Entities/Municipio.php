<?php namespace CDI\Entities;

class Municipio extends \Eloquent
{
	protected $table = 'municipios';
	protected $fillable = array('id', 'nombre','ccdi','cnch');

	public    $incrementing = false;

	public function estados ()
	{
		return $this->belongsToMany('Estado','estado_municipio','municipio_id','estado_id');
	}

	public function localidades ()
	{
		return $this->belongsToMany('Localidad','localidade_municipio','municipio_id','localidade_id');	
	}
}

?>