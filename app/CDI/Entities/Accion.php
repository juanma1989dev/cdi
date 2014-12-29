<?php namespace CDI\Entities;

class Accion extends \Eloquent
{
	protected $table = 'acciones';
	protected $fillable = array('id','nombre');
}

?>
