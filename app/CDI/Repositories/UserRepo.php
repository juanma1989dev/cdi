<?php namespace CDI\Repositories;
	
use CDI\Entities\User;
use CDI\Managers\UserManager;

class UserRepo extends BaseRepo 
{
	public function getModel ()
	{
		return new User;
	}

	public function getManager ()
	{
		return new UserManager ( $this->getModel() );
	}
}
	
?>