<?php
	use PHPMailer\PHPMailer\PHPMailer;

	require_once 'phpmailer/Exception.php';
	require_once 'phpmailer/PHPMailer.php';
	require_once 'phpmailer/SMTP.php';

	$mail = new PHPMailer(true);

	$alert = '';

	if(isset($_POST['submitForm'])){
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$phoneNum = $_POST['phoneumber'];
		$email = $_POST['email'];
		$package = $_POST['country'];
		$message = $_POST['subject'];

		try{
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'jemina.cayme.sy@gmail.com';
			$mail->Password = 'ics2608asdfghjkl';
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
			$mail->Port = '587';

			$mail->setFrom('jemina.cayme.sy@gmail.com');
			$mail->addAddress('jemina.cayme.sy@gmail.com');

			$mail->isHTML(true);
			$mail->Subject = 'New Form Submission (Contact Us)';
			$mail->Body = "<h3>First Name: $fname <br /> 
						Last Name: $lname <br />
						Phone Number: $phoneNum <br /> 
						Email: $email <br /> 
						Package: $package <br /> 
						Message: $message</h3>";

			$mail->send();
			$alert = '<div class = "alert-success">
						<span>Message sent! Thank you for contacting us.</span>
					</div>';
		} catch (Exception $e){
			$alert = '<div class = "alert-error">
						<span>'.$e->getMessage().'</span>
					</div>';
		}
	}
?>
