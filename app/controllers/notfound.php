<?php
class notfound extends Controller{
	public function index(){
		$links = ['<link rel="stylesheet" href="'.ASSET_ROOT . '/css/global.css'.'"/>'];
		$title = "404 Page Not Found";

		$this->view('templates/header', ['links' => $links, 'title'=>$title]);
		$this->view('errors/notfound');
		$this->view('templates/footer');
	}
}