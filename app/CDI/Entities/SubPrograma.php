<?php namespace CDI\Entities;

class SubPrograma extends \Eloquent
{
	protected $table = 'subprogramas';

	protected $fillable = array('id','nombre');
}

?>