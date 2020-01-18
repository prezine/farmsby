<?php
	require '../library/vendor/autoload.php';
	use AfricasTalking\SDK\AfricasTalking;

	// Set your app credentials
	$username   = "sandbox";
	$apiKey     = "63fb142dee6a4150fbc2a79b429c83f0425925ba81b615d194b61cb2643e28fc";

	// Initialize the SDK
	$AT         = new AfricasTalking($username, $apiKey);

	// Get the SMS service
	$sms        = $AT->sms();

	// Set the numbers you want to send to in international format
	$recipients = "+254705xxxyyy";

	// Set your message
	$message    = "I'm a lumberjack and its ok, I sleep all night and I work all day";

	// Set your shortCode or senderId
	$from       = "myShortCode or mySenderId";

	try {
	    // Thats it, hit send and we'll take care of the rest
	    $result = $sms->send([
	        'to'      => $recipients,
	        'message' => $message,
	        'from'    => $from
	    ]);

	    print_r($result);
	} catch (Exception $e) {
	    echo "Error: ".$e->getMessage();
	}
