<?php
	class  EstadoController extends BaseController
	{
		public function estado()
		{
			return View::make('users.admin.formEstado');
		}
		public function create()
		{
			$estados = Estado::orderBy('id','DESC')->get();

			return View::make('users/admin/estado/formEstado',compact('estados'));
		}

		public function store()
		{
			if(Request::ajax()){

				$validator = Validator::make(					
						Input::all()
					,
					array(
							'id'=> 'required|integer',
							'nombre'=> 'required',
						)
				);	

				if($validator->fails()){
					return Response::json([
						'success'=>false,
						'errors'=>$validator->errors()->toArray()]);
				}else{	

					$estado = Estado::create(array(
						'id' => Input::get('id'),
						'nombre' => Input::get('nombre'),
					));

					if ($estado)
					{
						return Response::json(array('success' => true, 'estado'=> $estado));
					}
				}
				
			}
		}


		public function edit($id)
		{
			$estado = Estado::find($id);
			return View::make('users/admin/estado/formEstadoMod',compact('estado'));
		}

		public function update($id)
		{
			$validator = Validator::make(
						Input::all()
						,
						array(

							'id'=> 'required',
							'nombre'=> 'required',
							
							)
					);


				if ( $validator->fails() ) {
				   return Redirect::to('users/admin/estado/'.$id)->withErrors($validator);
				}				


			$estado = Estado::find($id);
			$estado->nombre=Input::get('nombre');
			
			if($estado->save())
			{
				return Redirect::to('/admin/estado');
			}
			return 'no se guardo';
		}

		public function delete($id){
			$estado=Estado::find($id);
			if($estado->delete()){
				return Response::json(array( 'status' => 'ok'));
			}

		}




	}

?>