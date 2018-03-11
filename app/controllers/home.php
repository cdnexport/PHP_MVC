<?php 
	class Home extends Controller{
		public function index($user = null){
			//echo $name . " ";
			// $userModel = $this->model('User');

			// if($user){
			// 	$user = $userModel->get($user);
			// }
			// var_dump($user);
			$links = ['<link rel="stylesheet" href="'.ASSET_ROOT . '/css/global.css'.'"/>'];
			
			$this->view('templates/header', ['links' => $links]);

			// $this->view('home/index', ['user'=>$user]);
			$this->view('home/index');
			$this->view('templates/footer');
		}
	}
 ?>