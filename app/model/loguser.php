<?php  
	session_start();
	include_once '../connect.php';
	include_once '../controller/Farmsby.php';
	include_once '../controller/Database.php';
	include_once '../controller/User.php';
	include_once '../controller/Error.php';
	$farmsby = new Farmsby();
	$user = new Users($conn);
	$error = new ErrorLogs();
	$userID = $_GET['userID'];
	list($userID, $ext) = explode(".", $userID);
	$farmsby->setSession('userID', $userID);
	header("Location: ../../../index");