<?php
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>PHPMailer - sendmail test</title>
	</head>
	<body>
		<?php
			require_once('/tools/class.phpmailer.php');

			function sendEmail($email, $username, $password){
				//Create a new PHPMailer instance
				$mail = new PHPMailer();
				$mail->IsSMTP();
				$mail->SMTPDebug = 2;
				// Set PHPMailer to use the sendmail transport
				//$mail->isSendmail();
				$mail->Host = 'smtp.gmail.com';
				$mail->SMTPAuth = true;
				$mail->Port = 587;
				$mail->SMTPSecure = 'tls';
				//Set who the message is to be sent from
				$mail->setFrom('mongitox@gmail.com', 'Tournament Creator');
				$mail->Username = 'mongitox@gmail.com';
				$mail->Password = 'Grijalva1';
				//Set who the message is to be sent to
				$mail->addAddress($email, $username);
				//Set the subject line
				$mail->Subject = 'Hello, Welcome to Tournament Creator!';
				//Read an HTML message body from an external file, convert referenced images to embedded,
				//convert HTML into a basic plain-text alternative body
				//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
				//Replace the plain text body with one created manually
				$mail->Body = 'Thank you for signing up ' . $username . ', now you can go back to your tournament! If you forget your password, here it is: ' . $password .'.';

				//Attach an image file
				//$mail->addAttachment('images/phpmailer_mini.png');
				//send the message, check for errors
				if (!$mail->send()) {
					echo "Mailer Error: " . $mail->ErrorInfo;
				} else {
					echo "Message sent!";
				}
			}
		?>
</body>
</html>