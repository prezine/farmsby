<?php
	session_start();
	include_once '../connect.php';
	include_once '../controller/Farmsby.php';
	include_once '../controller/Database.php';
	include_once '../controller/Auth.php';
	include_once '../controller/Error.php';
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$auth = new Auth($conn);
		$error = new ErrorLogs();
		$data = array(
			'email' => $_POST['email'],
			'password' => hash('haval160,5', $_POST['password'])
		);
		if ($auth->login($data) == 200) {
			header("Location: ../../index");
		} else {
			$_SESSION['msg'] = (ENV == 1) ? $error->err('danger', $auth->login($data)) : $error->err('danger', 'Uhmm! incorrect login :(');
			header("Location: ". $_SERVER['HTTP_REFERER']);
		}
	}