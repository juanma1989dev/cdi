<?php namespace CDI\Entities; 

class InversionEjercida extends \Eloquent
{
	protected $table = 'inversionejercida';

	protected $fillable =  array('federalE', 'estatalE', 'municipalE', 'otrosE');
}

?>