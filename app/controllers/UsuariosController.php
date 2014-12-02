<?php 


	/**
	* 
	*/
	class UsuariosController extends BaseController
	{
		
		public function index(){
			$usuarios = Usuarios::all();
			return View::make('otra2')->with('usuarios', $usuarios);
		}

		public function eliminar($id){
			$usuario = Usuarios::find($id);
			if($usuario->delete()){
				return Redirect::to('/otra');
			}else { return 'Error';	}
		}

		public function crear (){
			

			$file = Input::file('imagen')[0];
			$fname = $file->getClientOriginalName();
			$ruta = $file->getRealPath();


			$original = imagecreatefromjpeg('C:\xampp\htdocs\projects\itste\public\img\avisos\IMG_2912.jpg');
			$thumb = imagecreatetruecolor(150,150); // Lo haremos de un tamaño 150x150

			$ancho = imagesx($original);
			$alto = imagesy($original);

			$url = 

			imagecopyresampled($thumb,$original,0,0,0,0,150,150,$ancho,$alto);
			imagejpeg($thumb, 'C:\xampp\htdocs\projects\laravel-master\public\uploads\\', 90); // 90 es la calidad de compresión

			var_dump($ruta);
		

			exit();	
			#$usuario = new Usuarios;

			#$usuario->nombre = Input::get('nombre');
			#$usuario->edad   = Input::get('edad');

			#if($usuario->save()){
			#	return Redirect::to('/otra');
			#}else { return 'Error'; }
 		}

 		public function editar ($id){
 			$usuario = Usuarios::find($id);
 			return View::make('editarUsuario')->with('usuario', $usuario); 
 		}

 		public function actualizar ($id) {
 			$usuario = Usuarios::find($id);

 			$usuario->nombre = Input::get('nombre');
 			$usuario->edad = Input::get('edad');

 			if ($usuario->save()) {
 				return Redirect::to('/otra');
 			}else {	return 'Error'; }
 		}


	}

 ?>