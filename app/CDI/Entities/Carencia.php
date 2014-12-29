<?php namespace CDI\Entities;

class Carencia extends \Eloquent
{
	protected $table = 'carencias';
	protected $fillable = array('id','nombre');		
}

?>