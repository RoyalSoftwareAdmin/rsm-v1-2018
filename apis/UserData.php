<?php 
	include("connection.php");
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){		
		if($_POST["layout"] === "logout"){
			session_start(); //Start the current session
			session_destroy(); //Destroy it! So we are logged out now
			header("location: ../login.php");
		}

		if($_POST["layout"] == "1001"){
			$fname = $_POST["fname"];
			$lname = $_POST["lname"];
			$password = $_POST["password"];
			$email = $_POST["email"];
			$gender = $_POST["gender"];
			$password = md5($_POST["password"]);
			$status = 1;		
			//$message = '<html>
							//<head>
							  //<title> Account Activation </title>
							//</head>
							//<body>
							  	//<p>Dear '.$fname.',</p> 
							  	//<p> Click the below link to activate your account </p>
							  	 //<a href="http://www.royalsoftwaresolution.com/RoyalMaster/activate.php?mail='.$email.'&actkey='.$randomVar.'"> Click Here </a> to Activate Your Account
							//</body>
						//</html>
			//';
			//$mail->setFrom('admin@royalsoftwaresolution.com', 'Royal Softwares');
			//$mail->addCustomHeader("CC: hr@royalsoftwaresolution.com , madhu@royalsoftwaresolution.com");
			//$mail->addAddress($email, $fname);     // Add a recipient
		    //$mail->Subject = 'Email Verification';
	    	//$mail->Body    = $message;    			       
		
		$query = "INSERT INTO user_details(fname, lname, email, password, status, gender, value, ActiveKey) VALUES ('".$fname."' ,'".$lname."' ,'".$email."' ,'". $password."' ,'". $status."' ,'". $gender."',64,'".$randomVar."')";
			$res = query($query);
			//if($res){
				//if($mail->send()){
					//$query = "INSERT INTO rsm_profile(userName) VALUES ('".$email."')";
					//$res = query($query);
					//if($res){
						//$query = "INSERT INTO rsm_login(userName, Password, value) VALUES ('".$email."' ,'".$password."', 3)";
						//$res = query($query);
						if($res){
							echo json_encode(array('Status' => "1" ));
						}
						else{
							echo json_encode(array('Status' => mysqli_error($conn)));
						}
						//else{
					   //echo json_encode(array('Status' => mysqli_error($conn)));
					//}
					
				//else{
					//echo json_encode(array('Status' => $mail->ErrorInfo));
				//}
			//}
			//else{
					//echo json_encode(array('Status' => mysqli_error($conn)));
				//}
			exit();
		}
	}	