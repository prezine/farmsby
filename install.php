<?php
	session_start();
	include_once 'app/connect.php';
	include_once 'app/controller/Farmsby.php';
	include_once 'app/controller/Database.php';
	include_once 'app/controller/Auth.php';
	include_once 'app/controller/Error.php';
	include_once 'app/controller/Hash.php';
	include_once 'app/controller/Log.php';
	include_once 'app/controller/Mailer.php';
	if ($_SERVER['REQUEST_METHOD'] === 'GET') {
		$auth = new Auth($conn);
		$error = new ErrorLogs();
		$hash = new Hash();
		$farmsby = new Farmsby();
		$logger = new LogActivities($conn);
		$farmsbyMailer = new FarmsbyMailer($conn);
		echo $farmsbyMailer->verifyMail('AMI032X9');
	}