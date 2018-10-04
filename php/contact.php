<?php

if(isset($_POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];


	$to      = 'artur.verios@gmail.com';
	$subject = 'Сообщение из контактной формы сайта';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){
		$res['sendstatus'] = 'done';

		//Edit your message here
		$res['message'] = 'Form Submission Successful';
    }
	else{
		$res['message'] = 'Failed to send mail. Please mail me to artur.verios@gmail.com';
	}


	echo json_encode($res);
}

?>