<?php
	include_once 'config.php';
	$conn = mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_CODE);
	mysqli_select_db($conn, DATABASE_NAME);
	echo (mysqli_select_db($conn, DATABASE_NAME) && ENV == 1) ? 'Connected' : 'Connection Failed' ;