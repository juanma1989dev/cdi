<?php namespace CDI\Entities;

class Programa extends \Eloquent
{
	protected $table = 'programas';
	protected $fillable = array('id','nombre');
}

?>