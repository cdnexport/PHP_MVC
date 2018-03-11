<?php 
	class Home extends Controller{
		public function index($user = null){
			$links = ['<link rel="stylesheet" href="'.ASSET_ROOT . '/css/global.css'.'"/>'];
			$title = "Home";
			
			$this->view('templates/header', ['links' => $links, 'title'=>$title]);
			$this->view('home/index');
			$this->view('templates/footer');
		}
	}
 ?>