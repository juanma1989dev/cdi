<?php namespace CDI\Entities;

class InversionProgramada extends \Eloquent
{
	protected $table = 'inversionprogramada'; 

	protected $fillable =  array('federal', 'estatal', 'municipal', 'otros');
}

?>