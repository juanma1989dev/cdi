<?php 
	class UbicacionesController extends BaseController{

		public function create(){
			$ubicaciones= Ubicacion::orderBy('id','DESC')->get();
			return View::make('/users/admin/ubicaciones/formUbicaciones',compact('ubicaciones'));
		}

		public function store(){

			if(Request::ajax()){

				$validator = Validator::make(					
						Input::all()
					,
					array(
							'id'=> 'required',
							'nombre'=> 'required',
						)
					);	

				if($validator->fails()){
					return Response::json([
						'success'=>false,
						'errors'=>$validator->errors()->toArray()]);
				}else{	

					$ubicacion = new Ubicacion;
					$ubicacion->id = Input::get('id');
					$ubicacion->nombre = Input::get('nombre');

					if ($ubicacion->save())
					{
						$ubicacion = $ubicacion ->find(Input::get('id'));
						return Response::json(array('success' => true, 'ubicacion'=> $ubicacion));
					}


				}
				
			}
		}

		public function edit($id)
		{
			$ubicacion=Ubicacion::find($id);
			return View::make('/users/admin/ubicaciones/formModUbicaciones',compact('ubicacion'));
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
				   return Redirect::to('users/admin/ubicaciones'.$id)->withErrors($validator);
				}				


					$ubicacion = Ubicacion::find($id);
					$ubicacion->nombre=Input::get('nombre');
				

					if($ubicacion->save())
					{
						return Redirect::to('/admin/ubicaciones/');
					}
					return 'no se guardo';
				}

				public function delete($id){

					$ubicacion=Ubicacion::find($id);
					if($ubicacion->delete()){
						return Response::json(array( 'status' => 'ok'));
					}

				}

	}
 ?>