<?php
	session_start();
	include_once '../connect.php';
	include_once '../controller/Farmsby.php';
	include_once '../controller/Database.php';
	include_once '../controller/Auth.php';
	include_once '../controller/User.php';
	include_once '../controller/Error.php';
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$auth = new Auth($conn);
		$error = new ErrorLogs();
		$user = new Users($conn);
		$data = array(
			'userID' => $auth->getSession('userID'),
			'accountName' => $_POST['accountName'],
			'accountNumber' => $_POST['accountNumber'],
			'bankName' => $_POST['bankName'],
			'is_current' => 1
		);
		if ($user->addBankData($data) == 200) {
			$_SESSION['msg'] = $error->err('success', 'Awesome! you\'ve updated your account with a bank');
			header("Location: ". $_SERVER['HTTP_REFERER']);	
		} else {
			$_SESSION['msg'] = 
			(ENV == 1) ? $error->err('danger', $res) : 
			$error->err('danger', 'Oops! bank update went wrong, try again shortly');
			header("Location: ". $_SERVER['HTTP_REFERER']);
		}
	}