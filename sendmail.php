<?php
error_reporting(0);
$name = $_POST['name'];
		$lastname = $_POST['lastname'];
		$subject = "Message|Նամակ կայքից  ".$_POST['subject'];
		$phone  = $_POST['phone'];
		$msg = $_POST['msg'];
		$to    =  'info@itresources.am';
		$headers = $_POST['email'];

	if (isset($_POST['sendmail']) && strlen($name) > 3) 
	{
		
		

		$message = "name ".$name."lastname ".$lastname."Phone  ".$phone.'   Message'.$msg;


			mail($to, $subject,$message,$headers);
			
	}

?>