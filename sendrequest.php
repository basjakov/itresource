<?php
error_reporting(0);
if($_POST['click'])
{


$name = $_POST["name"];
$lastname = $_POST["lastnames"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$time = $_POST["time"];
$priv = $_POST["priv"];
$grup = $_POST["grup"];
$msg = $_POST["msg"];
$first = $_POST["first"];
$second = $_POST["second"];
$thred  = $_POST["thred"];




$message = $name."  ".$lastname."  ".$email."    ".$tel."       ".$time."       ".$priv."     ".$grup."  ".$msg."   ".$first."   ".$second."   ".$thred;


$to      =   'info@itresources.am';

$subject = "Training|դասընաց";

if (strlen($name) > 0 && strlen($msg) > 0) 
{
mail($to, $subject,$message,$headers);

}

}

?>

