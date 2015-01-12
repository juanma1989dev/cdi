<?php namespace CDI\Entities; 

class Dependencia extends \Eloquent
{
	protected $table = 'dependencias';

	protected $fillable = array('id', 'nombre');
}

?>