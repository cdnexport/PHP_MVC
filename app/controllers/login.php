<?php
	class login extends Controller {
		public function index(){
			$this->view('templates/header');
			$this->view('account/login', ['user'=> $this->model('User')]);
			$this->view('templates/footer');
		}		
	}