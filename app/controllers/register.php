<?php
	class register extends Controller {
		public function index($success = true){
			//echo $success ? "in true":" in false";
			//$success = true;
			$this->view('templates/header');
			$this->view('account/register', ['user'=> $this->model('User')]);//, 'success'=>$success]);
			$this->view('templates/footer');
		}		
	}