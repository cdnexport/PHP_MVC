<?php
	// if($data['user']){
	// 	//The column name in the table is username. Since $data['user'] is a PDO object we can access the data in it that way. 
	// 	echo $data['user']->username;
	// }
var_dump($_SESSION['username']);
	if(isset($_SESSION['username'])){
		echo "Welcome ".$_SESSION['username'];
	}
	else{
		echo "Welcome to the home page";
	}