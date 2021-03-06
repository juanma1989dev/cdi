<?php namespace CDI\Repositories;

//use CDI\Managers\UserManager;
//use CDI\Managers\MunicipioManager;

abstract class BaseRepo 
{
	abstract public function getModel();

	abstract public function getManager();

	protected $model;
	protected $manager;
	protected $success = false;


	public function __construct () 
	{
		$this->manager = $this->getManager();
		$this->model   = $this->getModel();
	}


	public function getSuccess ()
	{
		return $this->success;
	}

	public function findOne ( $id )
	{
		return $this->model->find( $id );
	}

	public function findAll()
	{
		return $this->getModel()->all();
	}

	public function populate( $list )
	{
		$r = call_user_func_array(array( $this->model, 'lists'), $list);
		return $r;
	}

	public function store( $data ) 
	{   			
		$manager =  $this->getManager();

		$manager->setData( $data );
		
		$entity = $manager->save();

		if ( $entity ) 
		{
			$this->success = true;
			return $entity; 
		} 

		return $manager->getErrors()->toArray();		
	}

	public function update( $id, $data )
	{
		$model= $this->findOne( $id );
		
		$this->manager->setEntitie( $model );
		$this->manager->setData( $data );
		$entity = $this->manager->save();

		if ( $entity ) 
		{
			$this->success = true;
			return $entity;
		} 
			
		return $this->manager->getErrors()->toArray();
	}

	public function delete ( $id )
	{
		$usuario= $this->model->find( $id );

		if( $usuario->delete() )
		{
			$this->success = true ;
		}
	}

}

?>