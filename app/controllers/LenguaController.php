<?php 
	class LenguaController extends BaseController{

		public function create(){
			$lenguas=Lengua::orderBy('id','DESC')->get();
			return View::make('/users/admin/lenguas/formLenguas',compact('lenguas'));
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

					$lengua = new Lengua;
					$lengua->id = Input::get('id');
					$lengua->nombre = Input::get('nombre');

					if ($lengua->save())
					{
						$lengua = $lengua ->find(Input::get('id'));
						return Response::json(array('success' => true, 'lengua'=> $lengua));
					}


				}
				
			}
		}

		public function edit($id)
		{
			$lengua=Lengua::find($id);
			return View::make('/users/admin/lenguas/formModLenguas',compact('lengua'));
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
				   return Redirect::to('users/admin/lenguas'.$id)->withErrors($validator);
				}				


					$lengua = Lengua::find($id);
					$lengua->nombre=Input::get('nombre');
				

					if($lengua->save())
					{
						return Redirect::to('/admin/lenguas/');
					}
					return 'no se guardo';
				}

				public function delete($id){

					$lengua=Lengua::find($id);
					if($lengua->delete()){
						return Response::json(array( 'status' => 'ok'));
					}

				}

	}
 ?>