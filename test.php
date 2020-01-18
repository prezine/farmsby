<?php 
	session_start();
    include_once 'app/connect.php';
    include_once 'app/controller/Farmsby.php';
    include_once 'app/controller/Database.php';
    $db = new Database($conn);
    $farmsby = new Farmsby();
    $verificationData = $db->select("SELECT * FROM verification WHERE userID='1'", true);
    $verCode = json_decode($verificationData, true)['verificationCode'];
    ECHO $verCode;