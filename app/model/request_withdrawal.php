<?php
	session_start();
	include_once '../connect.php';
	include_once '../controller/Farmsby.php';
	include_once '../controller/Database.php';
	include_once '../controller/Auth.php';
	include_once '../controller/Error.php';
	include_once '../controller/Hash.php';
	include_once '../controller/Log.php';
	include_once '../controller/Transaction.php';
	if ($_SERVER['REQUEST_METHOD'] === 'GET') {
		$auth = new Auth($conn);
		$error = new ErrorLogs();
		$hash = new Hash();
		$farmsby = new Farmsby();
		$trasact = new Transaction($conn);
		$logger = new LogActivities($conn);
		$withdrawalType = $_GET['withdrawalType'];
		$investID = $_GET['investID'];
		$withdrawalAmt = $_GET['profit'];
		if ($withdrawalType == 1) {
			if ($trasact->withdrawProfitOnly($investID, $withdrawalAmt) == 200) {
				$_SESSION['msg'] = 
				(ENV == 0) ? $error->err('success', $res) : 
				$error->err('success', 'Awesome! Your request for profit withdrwal have been placed');
				header("Location: ". $_SERVER['HTTP_REFERER']);	
			} else {
				$_SESSION['msg'] = 
				(ENV == 0) ? $error->err('danger', $res) : 
				$error->err('danger', 'Oops! something went wrong, try again shortly');
				header("Location: ". $_SERVER['HTTP_REFERER']);
			}
		} else {
			if ($trasact->withdrawAll($investID, $withdrawalAmt) == 200) {
				$_SESSION['msg'] = 
				(ENV == 0) ? $error->err('success', $res) : 
				$error->err('success', 'Awesome! Your request for withdrwal have been placed');
				header("Location: ". $_SERVER['HTTP_REFERER']);	
			} else {
				$_SESSION['msg'] = 
				(ENV == 0) ? $error->err('danger', $res) : 
				$error->err('danger', 'Oops! something went wrong, try again shortly');
				header("Location: ". $_SERVER['HTTP_REFERER']);
			}
		}
	}