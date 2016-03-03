<?php

	function enviaMail($mailorigen, $passwordorigen, $email, $subject, $text, $copy, $copyCentre){

		include("class.phpmailer.php");
		$mail             = new PHPMailer();
		$body             = $text;
		$mail->IsSMTP();
		$mail->SMTPAuth   = true;                  // enable SMTP authentication
		$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
		$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
		$mail->Port       = 465;                   // set the SMTP port
		$mail->Username   = $mailorigen;  		    // GMAIL username
		$mail->Password   = $passwordorigen;        // GMAIL password
		$mail->From       = $mailorigen;
		$mail->FromName	  = $mailorigen;
		$mail->Subject    = $subject;
		$mail->MsgHTML($body);
		$mail->AddAddress($email);
		$mail->AddBcc($copyCentre);
		$mail->AddBcc($copy);
		
		$mail->IsHTML(true); // send as HTML


		if(!$mail->Send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
		  	return false;
		} else {
			return true;
		}


	}




?>