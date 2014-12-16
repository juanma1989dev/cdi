<?php
	class LocalidadesController extends BaseController{

		public function create(){
			$localidades = Localidad::all();
			return View::make('users/admin/localidad/formlocalidad', compact('localidades') );
		}

		public function store()
		{
			if(Request::ajax()){

				$validator = Validator::make(					
						Input::all()
					,
					array(
							'id' 	=> 'required',
							'nombre'=> 'required',
							
						)
				);	

				if($validator->fails()){
					return Response::json([
						'success'=>false,
						'errors'=>$validator->errors()->toArray()]);
				}else{	

					$localidad = new Localidad(array(
						'id'     => Input::get('id'),
						'nombre' => Input::get('nombre'),
					));

					if ($localidad->save()) {
						$localidad = Localidad::find(Input::get('id'));
						$localidad->municipios()->attach(66); // Cambiar por el id de la lista de municipios
						return Response::json(array('success' => true, 'localidad'=> $localidad));
					}
				}
				
			}
		}

		public function edit($id)
		{
			$localidad = Localidad::find($id);
			return View::make('users/admin/localidad/formModLoc',compact('localidad'));
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
				   return Redirect::to('users/admin/localidad/'.$id)->withErrors($validator);
				}				


			$localidad = Localidad::find($id);
			$localidad->nombre=Input::get('nombre');
			
			if($localidad->save())
			{
				return Redirect::to('/admin/localidad/');
			}
			return 'no se guardo algun cambio';
		}




			public function delete($id){

				$localidad=Localidad::find($id);
				if($localidad->delete()){
					return Response::json(array( 'status' => 'ok'));
				}

		}

		
	
		

	} 
 ?>