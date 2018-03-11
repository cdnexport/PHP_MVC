<?php
	class register extends Controller {
		public function index(){
			$links = ['<link rel="stylesheet" href="'.ASSET_ROOT . '/css/global.css'.'"/>','<link rel="stylesheet" href="'.ASSET_ROOT . '/css/forms.css'.'"/>'];
			$title = "Register";

			$this->view('templates/header', ['links' => $links, 'title'=>$title]);
			$this->view('account/register', ['user'=> $this->model('User')]);
			$this->view('templates/footer');
		}		
	}