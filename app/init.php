<?php

	require_once 'core/app.php';
	require_once 'core/Controller.php';

	//Asset root
	define('ASSET_ROOT', 'http://'.$_SERVER['HTTP_HOST'] . str_replace($_SERVER['DOCUMENT_ROOT'],
			'',
			str_replace('\\', '/', dirname(__DIR__).'/public')
		));

	//echo ASSET_ROOT;