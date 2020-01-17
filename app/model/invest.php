<?php
	session_start();
	include_once '../connect.php';
	include_once '../controller/Farmsby.php';
	include_once '../controller/Database.php';
	include_once '../controller/Transaction.php';
	include_once '../controller/Algorithm.php';
	include_once '../controller/Error.php';
	include_once '../controller/Hash.php';
	include_once '../controller/User.php';
	include_once '../controller/Log.php';
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$trans = new Transaction($conn);
		$error = new ErrorLogs();
		$farmsby = new Farmsby();
		$algorithm = new Algorithm();
		$hash = new Hash();
		$user = new Users($conn);
		$logger = new LogActivities($conn);
		include_once '../model/userdata.php';
		$invest = array(
			'userID' => $farmsby->getSession('userID'),
			'farm_mode' => $_POST['farmMode'],
			'amount' => $_POST['amount'],
			'monthCycle' => $_POST['cycle'],
			'transaction_ref' => $_POST['ref'],
			'status' => 0,
			'bonusUserID' => (!$refID) ? 0 : $refID,
			'bonusAmount' => $algorithm->percentage(5, $_POST['amount']),
			'request_withdrawal' => 0,
			'requestBonus' => 0,
			'is_paidBonus' => 0,
			'is_paid' => 0,
			'withdrawalAmt' => 0,
			'dateRequestWithdrawals' => 0,
			'datePaid' => 0, 
			'dateInvested' => GLOBAL_DATE
		);
		$data = array(
			'userID' => $farmsby->getSession('userID'),
			'activity' => 'Yay, you\'ve made an investment on farmsby',
			'action' => 'Investment', 
			'device_ip' => DEVICE_IP, 
			'user_agent' => USER_AGENT, 
			'dateNoted' =>  GLOBAL_DATE
		);
		$logger->log($data);
		echo $trans->recordNewInvestment($invest);
	}