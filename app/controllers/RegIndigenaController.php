<?php 
	class RegIndigenaController extends BaseController{

		public function create(){
			$regindigenas= RegionIndigena::orderBy('id','DESC')->get();
			return View::make('/users/admin/regionindigena/formRegIndigena',compact('regindigenas'));
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

						$regindigena = new RegionIndigena;
						$regindigena->id = Input::get('id');
						$regindigena->nombre = Input::get('nombre');

						if ($regindigena->save())
						{
							$regindigena = $regindigena ->find(Input::get('id'));
							return Response::json(array('success' => true, 'regindigena'=> $regindigena));
						}


					}
					
				}
		}

		public  function edit($id)
		{
			$regindigena= RegionIndigena::find($id);
			return View::make('/users/admin/regionindigena/formModRegIndigena',compact('regindigena'));
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
				   return Redirect::to('users/admin/regionindigena'.$id)->withErrors($validator);
					}	

					$regindigena = RegionIndigena::find($id);
					$regindigena->nombre=Input::get('nombre');
				

					if($regindigena->save())
					{
						return Redirect::to('/admin/regionindigena/');
					}
					return 'no se guardo';
			}


				public function delete($id){

					$regindigena=RegionIndigena::find($id);
					if($regindigena->delete()){
						return Response::json(array( 'status' => 'ok'));
					}

				}

	}
 ?>