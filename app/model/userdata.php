<?php
	$json = $user->userData();
	$data = json_decode($json, true);
	$name = $data['name'];
	@list($firstname, $lastname)  = explode(" ", $name);
	$email = $data['email'];
	$gender = $data['gender'];
	$userPhoto = 'https://ui-avatars.com/api/?name='.$firstname.'+'.$lastname.'&background=25D04E&color=fff&rounded=true&bold=true';
	$phone = $data['phone'];
	$country = $data['country'];
	$state = $data['state'];
	$is_approved = $data['is_approved'];
	$is_verified = (int)$data['is_verified'];
	$is_completReg = (int)$data['is_completReg'];
	$farm_mode = $data['farm_mode'];
	$investment_amount = $data['investment_amount'];
	$refID = $data['refID'];
	$userToken = $data['userToken'];
	$dateJoined = $data['dateJoined'];