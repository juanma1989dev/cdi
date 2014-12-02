<?php
	class  MunicipioController extends BaseController
	{
		public function create()
		{
			$municipios = Municipio::orderBy('id','DESC')->get();
			return View::make('/users/admin/municipio/formMunicipio',compact('municipios'));
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
							'ccdi' 	=> 'required',
							'cnch'	=> 'required'
						)
				);	

				if($validator->fails()){
					return Response::json([
						'success'=>false,
						'errors'=>$validator->errors()->toArray()]);
				}else{	

					$municipio = new Municipio(array(
						'id'     => Input::get('id'),
						'nombre' => Input::get('nombre'),
						'ccdi'   => Input::get('ccdi'),
						'cnch'   => Input::get('cnch')
					));

					if ($municipio->save()) {
						$municipio = Municipio::find(Input::get('id'));
						$municipio->estados()->attach(34);
						return Response::json(array('success' => true, 'municipio'=> $municipio));
					}
				}
				
			}
		}





		public function edit($id)
		{
			$municipio = Municipio::find($id);
			return View::make('users/admin/municipio/formMod',compact('municipio'));
		}

		
		public function update($id)
		{
			$validator = Validator::make(
						Input::all()
						,
						array(

							'id'=> 'required',
							'nombre'=> 'required',
							'ccdi' => 'required',
							'cnch' => 'required'
							)
					);


				if ( $validator->fails() ) {
				   return Redirect::to('users/admin/municipio/'.$id)->withErrors($validator);
				}				


			$municipio = Municipio::find($id);
			$municipio->nombre=Input::get('nombre');
			$municipio->ccdi=Input::get('ccdi');
			$municipio->cnch=Input::get('cnch');

			
			if($municipio->save())
			{
				return Redirect::to('/admin/municipio');
			}
			return 'no se guardo';
		}




		public function delete($id){

			$municipio=Municipio::find($id);
			if($municipio->delete()){
				return Response::json(array( 'status' => 'ok'));
			}

		}

		
	}
		
?>

