<?php
	class login extends Controller {
		public function index(){
			$links = ['<link rel="stylesheet" href="'.ASSET_ROOT . '/css/global.css'.'"/>',
			'<link rel="stylesheet" href="'.ASSET_ROOT . '/css/forms.css'.'"/>'];
			$title = "Login";
			
			$this->view('templates/header', ['links' => $links, 'title'=>$title]);
			$this->view('account/login', ['user'=> $this->model('User')]);
			$this->view('templates/footer');
		}		
	}