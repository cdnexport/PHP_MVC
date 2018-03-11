<?php
class logout extends Controller{
	public function index(){
		session_start();
		$_SESSION['username'] = null;
		header("Location: ".ASSET_ROOT);
	}
}