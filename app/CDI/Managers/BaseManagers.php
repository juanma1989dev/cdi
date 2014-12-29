<?php namespace CDI\Managers;

abstract class BaseManagers 
{
	protected $entity;
	protected $data;
	protected $errors;

	public function __construct( $entity )
	{
		$this->entity = $entity;
	}

	abstract public function getRules ();

	public function setData( $data )
	{
		$this->data = array_only( $data,  array_keys( $this->getRules() ) );
	}

	public function setEntitie( $entity )
	{
		$this->entity = $entity;
	}

	public function isValid() 
	{
		$rules = $this->getRules();
		
		$validatior = \Validator::make( $this->data, $rules );

		$isValid = $validatior->passes();

		$this->errors = $validatior->messages();

		return $isValid;
	}

	public function save()
	{
		if ( ! $this->isValid() )
		{
			return false;
		}

		$this->entity->fill( $this->data );
		$this->entity->save();

		return $this->entity;
	}

	public function getErrors()
	{
		return $this->errors;
	}
}

?>