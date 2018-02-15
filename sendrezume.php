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

    if (!$res['success'] && isset($_POST['sendrezume'])) {
        // What happens when the CAPTCHA wasn't checked
        echo '<p>Please go back and make sure you check the security CAPTCHA box.</p><br>';
    } else {
        // If CAPTCHA is successfully completed...
       

		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

		$name = $_POST['name'];
		$lastname = $_POST['lastname'];
		$subject = "Աշխատանքի ընդունման հայտարարություն ";
		$phone  = $_POST['phone'];
		$msg = $_POST['msg'];
		$to    =  'info@itresources.am';
		$headers = $_POST['email'];


		



	if (isset($_POST['sendrezume']) && strlen($name) > 3) 
	{

        
        $target_dir = "files/rezume";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if($imageFileType != "pdf" ) 
        {
    
    $uploadOk = 0;
        }
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)


		$message = "name ".$name."lastname ".$lastname."Phone  "."<a href='http://www.itresources.am/".$target_file."/'>Rezume</a>".$phone.'   Message'.$msg;
		mail($to, $subject,$message,$headers);


			
	}
    }



?>