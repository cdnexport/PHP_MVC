<?php
	class register extends Controller {
		public function index(){
			$links = ['<link rel="stylesheet" href="'.ASSET_ROOT . '/css/global.css'.'"/>','<link rel="stylesheet" href="'.ASSET_ROOT . '/css/forms.css'.'"/>',
				'<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
			  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
			  crossorigin="anonymous"></script>'];
			$title = "Register";

			$this->view('templates/header', ['links' => $links, 'title'=>$title]);
			$this->view('account/register', ['user'=> $this->model('User')]);
			$this->view('templates/footer');
		}		
	}