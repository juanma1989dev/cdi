<?php

	use CDI\Repositories\LocalidadRepo;

	class LocalidadesController extends BaseController
	{
		protected $localidadRepo;

		public function __construct ( LocalidadRepo $localidadRepo )
		{
			$this->localidadRepo = $localidadRepo;
		}

		public function create()
		{
			$localidades = Localidad::all();
			return View::make('users/admin/localidad/formlocalidad', compact('localidades') );
		}

		public function store()
		{
			$this->ajax( $this->localidadRepo, 'store', Input::all(), 'localidad' );
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