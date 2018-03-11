<?php
	session_start();
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" href="<?= ASSET_ROOT;?>/css/global.css"/>
</head>
<body>
	<ul>
		<li><a href="<?= ASSET_ROOT .'/login'?>">Login</a></li>
		<li><a href="<?= ASSET_ROOT . '/register'?>">Register</a></li>
		<li><a href="<?= ASSET_ROOT . '/home'?>">Home</a></li>
	</ul>