<?php 
	class RegionoaxController extends BaseController{

		public function create(){
			$regoaxaqueñas= Regionoaxaca::orderBy('id','DESC')->get();
			return View::make('/users/admin/regionoaxaca/formRegOax',compact('regoaxaqueñas'));
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

						$regoaxaqueña = new Regionoaxaca;
						$regoaxaqueña->id = Input::get('id');
						$regoaxaqueña->nombre = Input::get('nombre');

						if ($regoaxaqueña->save())
						{
							$regoaxaqueña = $regoaxaqueña ->find(Input::get('id'));
							return Response::json(array('success' => true, 'regoaxaqueña'=> $regoaxaqueña));
						}


					}
					
				}
		}

		public  function edit($id)
		{
			$regoaxaqueña= Regionoaxaca::find($id);
			return View::make('/users/admin/regionoaxaca/formModRegOAx',compact('regoaxaqueña'));
		}

		public function update($id){

				$validator = Validator::make(
						Input::all()
						,
						array(

							'id'=> 'required',
							'nombre'=> 'required',
							)
					);


				if ( $validator->fails() ) {
				   return Redirect::to('users/admin/regionoaxaca'.$id)->withErrors($validator);
					}	

					$regoaxaqueña = Regionoaxaca::find($id);
					$regoaxaqueña->nombre=Input::get('nombre');
				

					if($regoaxaqueña->save())
					{
						return Redirect::to('/admin/regionoaxaca/');
					}
					return 'no se guardo';
			}


				public function delete($id){

					$regoaxaqueña=Regionoaxaca::find($id);
					if($regoaxaqueña->delete()){
						return Response::json(array( 'status' => 'ok'));
					}

				}

	}
 ?>