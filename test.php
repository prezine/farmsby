<?php  
	include_once 'app/connect.php';
	include_once 'app/controller/Farmsby.php';
	include_once 'app/controller/Database.php';
	$database = new Database($conn);
	echo $database->select('SELECT * FROM users');