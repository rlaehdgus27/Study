<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 0);


//database connect
    define('DB_NAME', 'demo');
	define('DB_USER', 'demo');
	define('DB_PASSWORD', 'demo');
	define('DB_HOST', 'localhost');
	$link = mysqli_connect(DB_HOST, DB_USER , DB_PASSWORD, DB_NAME);
	$link->set_charset('utf8'); 
	
	@extract($_GET);
	@extract($_POST);

?>