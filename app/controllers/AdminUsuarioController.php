<?php 
	
use CDI\Repositories\UserRepo;

class AdminUsuarioController extends BaseController	
{
	protected $userRepo;

	public function __construct (UserRepo $userRepo) 
	{
		$this->userRepo = $userRepo; 
	}
	
	public function admin()
	{
		return View::make('users.admin.formadmin');
	}

	public function create()
	{
		$usuarios= User::orderBy('id', 'DESC')->get();
		return View::make('users.admin.formAlta',compact('usuarios'));
	}

	public function store() 
	{
		return ResponseData::json( $this->userRepo, 'store', [ Input::all() ],  'usuario' );
	} 

	public function edit( $id )
	{
		$usuario = $this->userRepo->findOne( $id );
		return View::make('users.admin.formMod', compact('usuario'));
	}

	public function update( $id )
	{	 
		return ResponseData::html( $this->userRepo, 'update', '/users/admin', [ $id, Input::all() ] );						
	}

	public function delete( $id )
	{
		return ResponseData::json( $this->userRepo, 'delete', [ $id ]);			
	}
}

?>