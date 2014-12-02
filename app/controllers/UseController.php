<?php

use CDI\Ejemplo;

class UseController extends BaseController {

	protected $ejemplo;
	
	function __construct(Ejemplo $ejemplo) {
		$this->ejemplo = $ejemplo;
	}

	public function index()
	{
		$this->ejemplo->hola();	
	}

	

}