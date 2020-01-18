<?php
	session_start();
	include_once '../connect.php';
	include_once '../controller/Farmsby.php';
	include_once '../controller/Database.php';
	include_once '../controller/Auth.php';
	include_once '../controller/Error.php';
	include_once '../controller/Hash.php';
	include_once '../controller/Log.php';
	include_once '../controller/Mailer.php';
	include_once 'mailer.php';
	include_once '../controller/User.php';
	$user = new Users($conn);
	include_once 'userdata.php';
	if ($_SERVER['REQUEST_METHOD'] === 'GET') {
		$auth = new Auth($conn);
		$error = new ErrorLogs();
		$hash = new Hash();
		$farmsby = new Farmsby();
		$logger = new LogActivities($conn);
		$farmsbyMailer = new FarmsbyMailer($conn);
		$verificationData = $auth->select("SELECT * FROM verification WHERE userID=".$farmsby->getSession('userID'), true);
		$code = json_decode($verificationData, true)['verificationCode'];
		$recipientEmail = $email;
		$subject = "Verify your farmsby account";
		$htmlData = $farmsbyMailer->resendVerification($code);
		sendEmail($recipientEmail, $recipientName = "Farmsby", $subject, $htmlData);
		header("Location: ". $_SERVER['HTTP_REFERER']);
	}