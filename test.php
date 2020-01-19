<?php 
	include_once 'app/connect.php';
	include_once 'app/controller/Farmsby.php';
	include_once 'app/controller/Database.php';
	$db = new Database($conn);
	$date = "Thu, 22 Aug 2019 10:00:24 -0400";
	echo $db->addDate($date, '0');