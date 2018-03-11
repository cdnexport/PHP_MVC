<?php
class notfound extends Controller{
	public function index(){
		$this->view('templates/header');
		$this->view('errors/notfound');
		$this->view('templates/footer');
	}
}