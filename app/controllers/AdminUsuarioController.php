<?php 

	class AdminUsuarioController extends BaseController
	{
		
		public function admin()
		{
			return View::make('users.admin.formadmin');
		}

		public function create()
		{
			$usuarios=User::orderBy('id', 'DESC')->get();
			return View::make('users.admin.formAlta',compact('usuarios'));
		}

		public function store() 
		{
			if(Request::ajax()){

				$validator = Validator::make(					
						Input::all()
					,
					array(
							'nombres'=> 'required',
							'apellidoP'=> 'required',
							'apellidoM'=> 'required',
							'usuario'=> 'required',
							'contrasenia'=> 'required',
							'nivel'=> 'required'

						)
					);	

				if($validator->fails()){
					return Response::json([
						'success'=>false,
						'errors'=>$validator->errors()->toArray()]);
				}else{	

					$usuario = User::create(array(
						'nombres' => Input::get('nombres'),
						'apellidoP' => Input::get('apellidoP'),
						'apellidoM' => Input::get('apellidoM'),
						'usuario'   => Input::get('usuario'),
						'contrasenia' => Hash::make(Input::get('contrasenia')),
						'nivel' => Input::get('nivel')
					));

					if ($usuario)
					{
						return Response::json(array('success' => true, 'usuario'=> $usuario));
					}
				}
				
			}
		}

		public function edit($id)
		{
			$usuario=User::find($id);
			return View::make('users.admin.formMod',compact('usuario'));
		}

		public function update($id)
		{

				$validator = Validator::make(
						Input::all()
						,
						array(

							'nombres'=> 'required',
							'apellidoP'=> 'required',
							'apellidoM'=> 'required',
							'usuario'=> 'required',
							'contrasenia'=> 'required',
							'nivel'=> 'required'
							)
					);


				if ( $validator->fails() ) {
				   return Redirect::to('/users/admin/'.$id)->withErrors($validator);
				}				


			$usuario = User::find($id);
			$usuario->nombres=Input::get('nombres');
			$usuario->apellidoM=Input::get('apellidoM');
			$usuario->apellidoP=Input::get('apellidoP');
			$usuario->usuario=Input::get('usuario');
			$usuario->contrasenia=Input::get('contrasenia');
			$usuario->nivel=Input::get('nivel');

			if($usuario->save())
			{
				return Redirect::to('/users/admin');
			}
			return 'no se guardo';
		}

		public function delete($id){

			$usuario=User::find($id);
			if($usuario->delete()){
				return Response::json(array( 'status' => 'ok'));
			}





		}
	}
?>
