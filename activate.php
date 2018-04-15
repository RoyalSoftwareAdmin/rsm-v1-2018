<?php	
	
	include("apis/config.php");
	include("mail_config.php");

	$mail = $_GET['mail'];
	$actkey = $_GET['actkey'];
	$query = "update rsm_user set status = 1 where email='".$mail."' and ActiveKey='".$actkey."'";
	$res = query($query);
	// Multiple recipients
	$message = '<html>
					<head>
					  <title> Account Activation </title>
					</head>
					<body>
					  	<p>Dear User,</p> 
					  	<p> Your Account is activated now , Start finding your skills</p>
					  	 <a href="http://www.royalsoftwaresolution.com/RoyalMaster/"> Royal Skills Master</a>
					</body>
				</html>';
	// To send HTML mail, the Content-type header must be set
	$mail->setFrom('admin@royalsoftwaresolution.com', 'Royal Softwares');
	$mail->addCustomHeader("CC: hr@royalsoftwaresolution.com , madhu@royalsoftwaresolution.com");
	$mail->addAddress($email, $fname);     // Add a recipient
    $mail->Subject = 'Email Verification';
	$mail->Body    = $message; 
	if($res == 1){	
			$mail->send();	
			exit(header("Location: login.php"));
		}else{
			echo json_encode(array('Status' => mysqli_error($conn)));
		}	
?>