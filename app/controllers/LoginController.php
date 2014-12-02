<?php 

	class LoginController extends BaseController {

		public function login() {
			$user  = Input::get('user');
			$password = Input::get('password');

			if ($user == 'admin' && $password == 'admin') {
				return  Redirect::to('/admin');	
			} 

			return Redirect::back();
		}
	}

?>