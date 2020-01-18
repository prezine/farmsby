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
		$code = $_GET['verificationCode'];
		if ($auth->verifyAccount($code) == 200) {
			$recipientEmail = $email;
			$subject = "Welcome to farmsby";
			$htmlData = $farmsbyMailer->welcomeMail($name);
			sendEmail($recipientEmail, $recipientName = "Farmsby", $subject, $htmlData);
			$data = array(
				'userID' => $farmsby->getSession('userID'),
				'activity' => 'Hi there, welcome to farmsby',
				'action' => 'Registration', 
				'device_ip' => DEVICE_IP,
				'user_agent' => USER_AGENT, 
				'dateNoted' =>  GLOBAL_DATE
			);
			$logger->log($data);
			$_SESSION['msg'] = $error->err('success', 'Great! your account has been verified');
			header("Location: ../../index");
		} else {
			$_SESSION['msg'] = (ENV == 0) ? $error->err('danger', $res) : $error->err('danger', 'Oops! something went wrong');
			header("Location: ../../login");
		}
	}