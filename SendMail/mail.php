<?php

 //require_once "dbconn.php";


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader  
require 'vendor/autoload.php';

$var_value = $_GET['email'];
//$sql = "SELECT email FROM multiple";

	$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
	try {
		//Server settings
		//$mail->SMTPDebug = 2;                                 // Enable verbose debug output
		$mail->isSMTP();                                      // Set mailer to use SMTP
		
	  // Set parameters for SMTP  
	$mail->SMTPOptions = array(
	'ssl' => array(
	'verify_peer' => false,
	'verify_peer_name' => false,
	'allow_self_signed' => true
	)
	);


		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'elysianwed@gmail.com';                 // SMTP username
		$mail->Password = 'ElysianWedding';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		
		$mail->Port = 587;                                    // 587 TCP port to connect to

		//Recipients
		$mail->setFrom('elysianwed@gmail.com', 'Wedding Planner');
	   
		$mail->addAddress($var_value);               // Name is optional
		//$mail->addReplyTo('info@example.com', 'Information');
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');

		//Attachments
		//$mail->addAttachment('Magento setup.docx');         // Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

		//Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = 'Attention Please';
		$mail->Body    = '<b>We are glad to inform that we have started a new company. Hope you like it. Please do visit our website and check it out.</b>';
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		$mail->send();
		//echo 'Message has been sent';
        header('Location: homepg.php');
	} 
	
	catch (Exception $e) {
		echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	}
}