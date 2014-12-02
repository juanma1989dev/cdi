<?php 

	class AdminController extends BaseController {

		public function index() {
			return View::make('users/admin/index');
		}

	}


?>