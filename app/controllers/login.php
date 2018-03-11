<?php
	class login extends Controller {
		public function index(){
			$links = ['<link rel="stylesheet" href="'.ASSET_ROOT . '/css/global.css'.'"/>',
			'<link rel="stylesheet" href="'.ASSET_ROOT . '/css/forms.css'.'"/>'];
			
			$this->view('templates/header', ['links' => $links]);
			$this->view('account/login', ['user'=> $this->model('User')]);
			$this->view('templates/footer');
		}		
	}