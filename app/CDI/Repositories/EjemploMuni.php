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
						$municipio->estados()->attach(78);
						return Response::json(array('success' => true, 'municipio'=> $municipio));
					}
				}
				
			}