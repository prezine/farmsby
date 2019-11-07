<?php  
	include_once 'app/connect.php';
	include_once 'app/controller/Farmsby.php';
	include_once 'app/controller/Database.php';
	$database = new Database($conn);
	//$database->viewJson();
	echo $database->insert('faq', array(
		'question' => 'What is your name?',
		'answer' => 'Precious Tom',
		'dateAdded' => GLOBAL_DATE
	));