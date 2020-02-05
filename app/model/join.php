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
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$auth = new Auth($conn);
		$error = new ErrorLogs();
		$hash = new Hash();
		$farmsby = new Farmsby();
		$logger = new LogActivities($conn);
		$farmsbyMailer = new FarmsbyMailer($conn);
		$code = $hash->mt_rand_str(6);
		$email = $_POST['email'];
		if (json_decode($auth->select("SELECT COUNT(*) FROM users WHERE email ='$email'", true), true)['COUNT(*)'] !== "1") {
			$res = $auth->join(array(
				'name' => $_POST['name'],
				'email' => $_POST['email'],
				'password' => hash('haval160,5', $_POST['password']),
				'is_approved' => 0,
				'is_verified' => 0,
				'is_completReg' => 0,
				'refID' => $_POST['refID'],
				'userToken' => $hash->mt_rand_str(6),
				'is_admin' => 0,
				'how_did_you_hear' => $_POST['how_did_you_hear'],
				'dateJoined' => GLOBAL_DATE
			), $code);
			if ($res == 200) {
				$recipientEmail = $_POST['email'];
				$subject = "Verify your farmsby account";
				$htmlData = $farmsbyMailer->verifyMail($code);
				sendEmail($recipientEmail, $recipientName = "Farmsby", $subject, $htmlData);
				$data = array(
					'userID' => $farmsby->getSession('userID'),
					'activity' => 'Hi there, welcome to Farmsby',
					'action' => 'Registration', 
					'device_ip' => DEVICE_IP, 
					'user_agent' => USER_AGENT, 
					'dateNoted' =>  GLOBAL_DATE
				);
				$logger->log($data);
				header("Location: ../../index");
			} else {
				$_SESSION['msg'] = (ENV == 0) ? $error->err('danger', $res) : $error->err('danger', 'Oops! something went wrong');
				header("Location: ". $_SERVER['HTTP_REFERER']);
			}	
		} else {
			$_SESSION['msg'] = $error->err('danger', 'This email is associated with another account');
			header("Location: ". $_SERVER['HTTP_REFERER']);
		}
	}