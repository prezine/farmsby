<?php
	session_start();
	include_once '../controller/Farmsby.php';
	$farmsby = new Farmsby();
	if ($_SERVER['REQUEST_METHOD'] === 'GET') {
		$farmsby->killSession('userID');
		header("Location: ../../login?rdr=.");
	}