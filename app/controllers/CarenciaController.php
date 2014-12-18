<?php 
	class CarenciaController extends BaseController{

		public function create(){
			$carencias=Carencia::orderBy('id','DESC')->get();
			return View::make('/users/admin/carencias/formCarencia',compact('carencias'));
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

					$carencia = new Carencia;
					$carencia->id = Input::get('id');
					$carencia->nombre = Input::get('nombre');

					if ($carencia->save())
					{
						$carencia = $carencia ->find(Input::get('id'));
						return Response::json(array('success' => true, 'carencia'=> $carencia));
					}


				}
				
			}
		}

		public function edit($id)
		{
			$carencia=Carencia::find($id);
			return View::make('/users/admin/carencias/formModCarencia',compact('carencia'));
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
				   return Redirect::to('users/admin/carencias'.$id)->withErrors($validator);
				}				


					$carencia = Carencia::find($id);
					$carencia->nombre=Input::get('nombre');
				

					if($carencia->save())
					{
						return Redirect::to('/admin/carencias/');
					}
					return 'no se guardo';
				}

				public function delete($id){

					$carencia=Carencia::find($id);
					if($carencia->delete()){
						return Response::json(array( 'status' => 'ok'));
					}

				}

	}
 ?>