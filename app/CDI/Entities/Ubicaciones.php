<?php namespace CDI\Entities; 

class Ubicaciones extends \Eloquent
{
	protected $table = 'ubicaciones';

	protected $fillable = array('id','nombre');	
}


?>