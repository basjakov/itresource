<?php

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$subject = $_POST['subject'];
$phone  = $_POST['phone'];
$msg = $_POST['msg'];

$to    =  'info@itresources.ru';

$subject = "Message|Նամակ կայքից";

$message = "name ".$name."</br>"."lastname ".$lastname."</br>"."Phone".$phone."</br>"."</br>".$msg;

if (isset($_POST['sendmail']) && strlen($_POST['name']>3)) 
{
		mail($to, $subject,$message,$headers);
}

?>