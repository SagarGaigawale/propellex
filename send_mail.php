<?php
	if(isset($_REQUEST['send_mail']))
	{
	   $mailid ="rama@propellex.co.in";
	   $name =$_REQUEST['name'];
	   $message =$_REQUEST['message'];
	   $email =$_REQUEST['email'];
		require_once("phpmailer/phpmailer.php");
		//$mailid ="kedar.adhangale79@gmail.com";
		$mail = new PHPMailer(); // create a new object
		$mail->IsSMTP(); // enable SMTP
		$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true; // authentication enabled
		$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 587; // or 587
		$mail->IsHTML(true);    
		$mail->Username="testredbox01@gmail.com";
		$mail->Password="Z%!8:<sf";
		// From :(user name and user mail id)
		$mail->FromName = "Propellex Solution pvt ltd.";
		$mail->From="testredbox01@gmail.com";
		// To 
		$mail->AddAddress($mailid);   // IMP : This is static email id. we need to change it later
		//$mail->AddBCC($email); // this email is going to the requester
	     $mail->AddCC("sagarg@propellex.co.in");
	  //  $mail->AddBCC("contactus@epropellex.co.in");
		$mail->Subject = "CONTACT DETAILS";
		$message_text =
		"<table width='650px' style='background:#f2f2f2;color: #3D3D3D;border-radius:5px;box-shadow:0px 0px 5px #444;  padding: 15px;'>
							<tr>
								<td>Hi ".strtoupper($name).",</td>
							</tr>
							<tr><td>&nbsp;</td></tr>
						
							<tr>
								<td>CONTACT DETAILS-</td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td>Email id : ".strtolower($email).",</td>
							</tr>

							<tr>
								<td>Message : ".$message."</td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td colspan='2'>From</td>
							</tr>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td colspan='2'>Epropellex Solution pvt ltd.</td>
							</tr>
						</table>";

	  $mail->Body=$message_text;
                     
                      //$mail->AddAttachment($pdf_filename);

                    
		if($mail->send())
					{	
						echo "mail sent";
						
						header("Location:index.php");
					}
			
						
	}
		
	
?>
