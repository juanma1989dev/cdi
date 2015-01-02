<?php namespace CDI\Entities;

class AvanceAccion extends \Eloquent
{
	protected $table = 'avanceaccion';
	protected $fillable = array('beneficiariosH', 'beneficiariosM', 'avanceCantidad');
}

?>
