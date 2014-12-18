<?php 
	class ProgramasController extends BaseController{

		public function create(){
			$programas=Programa::orderBy('id','DESC')->get();
			return View::make('/users/admin/programas/formProgramas',compact('programas'));
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

					$programa = new Programa;
					$programa->id = Input::get('id');
					$programa->nombre = Input::get('nombre');

					if ($programa->save())
					{
						$programa = $programa ->find(Input::get('id'));
						return Response::json(array('success' => true, 'programa'=> $programa));
					}


				}
				
			}
		}

		public function edit($id)
		{
			$programa=Programa::find($id);
			return View::make('/users/admin/programas/formModPrograma',compact('programa'));
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
				   return Redirect::to('users/admin/programas'.$id)->withErrors($validator);
				}				


					$programa = Programa::find($id);
					$programa->nombre=Input::get('nombre');
				

					if($programa->save())
					{
						return Redirect::to('/admin/programas/');
					}
					return 'no se guardo';
				}

				public function delete($id){

					$programa=Programa::find($id);
					if($programa->delete()){
						return Response::json(array( 'status' => 'ok'));
					}

				}

	}
 ?>