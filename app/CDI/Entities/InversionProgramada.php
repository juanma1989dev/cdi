<?php namespace CDI\Entities;

class InversionProgramada extends \Eloquent
{
	protected $table = 'inversionprogramada'; 

	protected $fillable =  array('federalP', 'estatalP', 'municipalP', 'otrosP');
}

?>