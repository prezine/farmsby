<?php  
    session_start();
    include_once 'app/connect.php';
    include_once 'app/controller/Farmsby.php';
    include_once 'app/controller/Database.php';
    include_once 'app/controller/Transaction.php';
    include_once 'app/controller/User.php';
    include_once 'app/controller/Algorithm.php';
    $user = new Users($conn);
    include_once 'app/model/userdata.php';
    $trans = new Transaction($conn);
    $algo = new Algorithm();
    $receiptData = $trans->generateReceipt('247468170'); 
    $receiptDecode = json_decode($receiptData, true);
    echo $receiptData;