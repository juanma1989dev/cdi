<?php 
	class ProyectController extends BaseController
	{
		public function proyectos()
		{
				return View::make('/admin/proyectos/formProyect');
		}

	}
?>