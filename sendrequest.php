<?php


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




$message = $name."</br>".$lastname."</br>".$email."</br>".$tel."</br>".$time."</br>".$priv."</br>".$grup."</br>".$msg."</br>".$first."</br>".$second."</br>".$thred;


$to      =   'info@itresources.ru';

$subject = "Training|դասընաց";

if (isset($_POST["click"]) and  strlen($name) > 0 and strlen($msg) > 0) {
mail($to, $subject,$message,$headers);
}

?>

?>