<?php 
	class DependenciaController extends BaseController{

		public function create(){
			$dependencias=Dependencia::orderBy('id','DESC')->get();
			return View::make('/users/admin/dependencias/formDependencia',compact('dependencias'));
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

					$dependencia = new Dependencia;
					$dependencia->id = Input::get('id');
					$dependencia->nombre = Input::get('nombre');

					if ($dependencia->save())
					{
						$dependencia = $dependencia ->find(Input::get('id'));
						return Response::json(array('success' => true, 'dependencia'=> $dependencia));
					}


				}
				
			}
		}

		public function edit($id)
		{
			$dependencia=Dependencia::find($id);
			return View::make('/users/admin/dependencias/formModDependencia',compact('dependencia'));
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
				   return Redirect::to('users/admin/dependencias'.$id)->withErrors($validator);
				}				


					$dependencia = Dependencia::find($id);
					$dependencia->nombre=Input::get('nombre');
				

					if($dependencia->save())
					{
						return Redirect::to('/admin/dependencias/');
					}
					return 'no se guardo';
				}

				public function delete($id){

					$dependencia=Dependencia::find($id);
					if($dependencia->delete()){
						return Response::json(array( 'status' => 'ok'));
					}

				}

	}
 ?>