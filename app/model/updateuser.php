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
		$farmsby = new Farmsby();
		$updateProfile = $auth->update("UPDATE users SET name='". $_POST['name'] ."', email='". $_POST['email'] ."', phone='". $_POST['phone'] ."', gender='". $_POST['gender'] ."' WHERE userID=". $farmsby->getSession('userID'));
		if ($updateProfile == 200) {
			$_SESSION['msg'] = $error->err('success', '<strong>Great!</strong> your profile has been updated');
			header("Location: ". $_SERVER['HTTP_REFERER']);
		} else {
			$_SESSION['msg'] = 
			(ENV == 1) ? $error->err('danger', $updateProfile) : $error->err('danger', 'Oops! something went wrong, try again shortly :(');
			header("Location: ". $_SERVER['HTTP_REFERER']);
		}
	}