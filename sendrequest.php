<?php
error_reporting(0);
    function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6Ld3ZUMUAAAAAM0kVWndH0Jy-Ik1ilQ8Bxice12t',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    // Call the function post_captcha
    $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success'] && isset($_POST['sendmail'])) {
        // What happens when the CAPTCHA wasn't checked
        echo '<p>Please go back and make sure you check the security CAPTCHA box.</p><br>';
    }
     else
      {

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
      }



?>

