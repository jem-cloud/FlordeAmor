<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'path/to/PHPMailer/src/Exception.php';
	require 'path/to/PHPMailer/src/PHPMailer.php';
	require 'path/to/PHPMailer/src/SMTP.php';

	$alert = '';
	
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Mailer = "smtp";

	$mail->SMTPDebug  = 1;  
	$mail->SMTPAuth   = TRUE;
	$mail->SMTPSecure = "tls";
	$mail->Port       = 587;
	$mail->Host       = 'smtp.gmail.com';
	$mail->Username   = 'jemina.cayme.sy@gmail.com';
	$mail->Password   = 'ics2608asdfghjkl';

	$mail->IsHTML(true);
	$mail->AddAddress('jemina.cayme.sy');
	$mail->SetFrom('jemina.cayme.sy');
 
	$mail->Subject = 'New Form Submission (Contact Us)';
	$content = "<h3>First Name: $fname <br /> 
			Last Name: $lname <br />
			Phone Number: $phoneNum <br /> 
			Email: $email <br /> 
			Package: $package <br /> 
			Message: $message</h3>";

	$mail->MsgHTML($content); 
	if(!$mail->Send()) {
  		$alert = '<div class = "alert-success">
				<span>Message sent! Thank you for contacting us.</span>
				</div>';
	} else {
  		$alert = '<div class = "alert-error">
				<span>'.$e->getMessage().'</span>
				</div>';
	}
?>
