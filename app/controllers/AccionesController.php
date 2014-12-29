<?php 
	use CDI\Repositories\AccionRepo;

	class AccionesController extends BaseController
	{
		protected $accionRepo;

		public function __construct ( AccionRepo $accionRepo )
		{
			$this->accionRepo = $accionRepo; 
		}

		public function create(){
			//$acciones = Accion::all();
			$acciones=Accion::orderBy('id','DESC')->get();
			return View::make('/users/admin/acciones/formAccion',compact('acciones'));
		}

		public function store(){
			$this->ajax( $this->accionRepo, 'store', Input::all(), 'accion' );
		}

		public function edit($id)
		{
			$accion=Accion::find($id);
			return View::make('/users/admin/acciones/formModAccion',compact('accion'));
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
				   return Redirect::to('users/admin/acciones'.$id)->withErrors($validator);
				}				


					$accion = Accion::find($id);
					$accion->nombre=Input::get('nombre');
				

					if($accion->save())
					{
						return Redirect::to('/admin/acciones/');
					}
					return 'no se guardo';
				}

				public function delete($id){

					$accion=Accion::find($id);
					if($accion->delete()){
						return Response::json(array( 'status' => 'ok'));
					}

				}

	}
 ?>