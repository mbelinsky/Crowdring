<?php
	
	require('Services/Twilio.php');

	$AccountSid = "8675309";
	$AuthToken = "12345";

	$client2 = new Services_Twilio($AccountSid, $AuthToken);
	foreach ($client2->account->outgoing_caller_ids as $caller_id) {
  	print $caller_id->friendly_name;
}

	$client = new Services_Twilio($AccountSid, $AuthToken);
	$phone_number = $_REQUEST['From'];
		
	 $people = array(
		"+1800MATRESS" => "Jenny",
		$phone_number => "Mark",
	);
	
	foreach ($people as $number => $name) {
		$sms = $client->account->sms_messages->create(
	  		'+1646TWILIO', // From a Twilio number in your account
	  		 $number, // Text any number
	  		"Free Msg: Thanks for trying out @Crowdring, my global missed call campaigning tool.Visit www.markbelinsky.com to learn more."
		);

	echo "Sent message to $name";
	}
	
?>
	