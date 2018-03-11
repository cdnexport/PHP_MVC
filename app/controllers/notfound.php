<?php
class notfound extends Controller{
	public function index(){
		$links = ['<link rel="stylesheet" href="'.ASSET_ROOT . '/css/global.css'];
			
		$this->view('templates/header', ['links' => $links]);
		$this->view('errors/notfound');
		$this->view('templates/footer');
	}
}