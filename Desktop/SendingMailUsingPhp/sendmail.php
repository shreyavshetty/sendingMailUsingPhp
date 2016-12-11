<?php
require 'class.phpmailer.php';
require 'class.smtp.php';
	$mail=new PHPMailer();
	$mail->IsSMTP();
	$mail->Mailer = 'smtp';
	$mail->SMTPDebug=1;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure="ssl";
	$mail->Host="smtp.gmail.com";
	$mail->Port=465;
	$mail->IsHTML(true);
	$mail->Username="username@gmail.com";
	$mail->Password="password";
	$mail->SetFrom("shreyav4@gmail");
	$mail->Subject=$_POST["subject"];
	$mail->Body=$_POST["body"];
	$mail->AddAddress($_POST["to"]);
	if(!$mail->Send())
	{
		echo "Mailer Error:";
	}
	else
	{
		echo "Message has been sent";
	}
	?>

