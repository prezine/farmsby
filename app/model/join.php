<?php
	session_start();
	include_once '../connect.php';
	include_once '../controller/Farmsby.php';
	include_once '../controller/Database.php';
	include_once '../controller/Auth.php';
	include_once '../controller/Error.php';
	include_once '../controller/Hash.php';
	include_once '../controller/Log.php';
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$auth = new Auth($conn);
		$error = new ErrorLogs();
		$hash = new Hash();
		$farmsby = new Farmsby();
		$logger = new LogActivities($conn);
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
			'dateJoined' => GLOBAL_DATE
		));
		if ($res == 200) {
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
	}