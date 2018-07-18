<?php 
	include("config.php");
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){		
		if($_POST["layout"] === "logout"){
			session_start(); //Start the current session
			session_destroy(); //Destroy it! So we are logged out now
			header("location: ../login.php");
		}

		if($_POST["layout"] == "1001"){
			include_once("../mail_config.php");
			function randomString($length = 6) {
				$str = "";							
				$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
				$max = count($characters) - 1;
				for ($i = 0; $i < $length; $i++) {
					$rand = mt_rand(0, $max);
					$str .= $characters[$rand];
				}
				return $str;
			}
			$randomVar = randomString();

			$fname = $_POST["fname"];
			$lname = $_POST["lname"];
			$email = $_POST["email"];
			$password = md5($_POST["password"]);
			$gender = $_POST["gender"];
			$status = 0;			
			$message = '<html>
							<head>
							  <title> Account Activation </title>
							</head>
							<body>
							  	<p>Dear '.$fname.',</p> 
							  	<p> Click the below link to activate your account </p>
							  	 <a href="http://www.royalsoftwaresolution.com/RoyalMaster/activate.php?mail='.$email.'&actkey='.$randomVar.'"> Click Here </a> to Activate Your Account
							</body>
						</html>
			';
			$mail->setFrom('admin@royalsoftwaresolution.com', 'Royal Softwares');
			$mail->addCustomHeader("CC: hr@royalsoftwaresolution.com , madhu@royalsoftwaresolution.com");
			$mail->addAddress($email, $fname);     // Add a recipient
		    $mail->Subject = 'Email Verification';
	    	$mail->Body    = $message;    			       
		
		$query = "INSERT INTO rsm_user(fname, lname, email, password, status, gender, value, ActiveKey) VALUES ('".$fname."' ,'".$lname."' ,'".$email."' ,'". $password."' ,'". $status."' ,'". $gender."',64,'".$randomVar."')";
			$res = query($query);
			if($res){
				if($mail->send()){
					$query = "INSERT INTO rsm_profile(userName) VALUES ('".$email."')";
					$res = query($query);
					if($res){
						$query = "INSERT INTO rsm_login(userName, Password, value) VALUES ('".$email."' ,'".$password."', 3)";
						$res = query($query);
						if($res){
							echo json_encode(array('Status' => "1" ));
						}else{
							echo json_encode(array('Status' => mysqli_error($conn)));
						}
					}else{
						echo json_encode(array('Status' => mysqli_error($conn)));
					}
					
				}else{
					echo json_encode(array('Status' => $mail->ErrorInfo));
				}
			}else{
					echo json_encode(array('Status' => mysqli_error($conn)));
				}
			
		}

		if($_POST["layout"] == "1002"){
			$email = $_POST["email"];
			$password = md5($_POST["password"]);
			
			$query = "select l.* , u.* from rsm_login l , rsm_user u where l.userName = '".$email."' and l.Password = '".$password."' and l.userName = u.email and u.status=1";
			$res = query($query);
			if(mysqli_num_rows($res) !== 0 ){
				$row = $res->fetch_assoc();
				$row["UserStatus"] = 1;
				$_SESSION["user"] = $row["userName"];
				$_SESSION["value"] = $row["value"];
				echo json_encode($row);				
			}else{
				echo json_encode(array('Status' => "Invalid UserName and Password"));
			}
		}

		if($_POST["layout"] == "1002_1"){
			include_once("../mail_config.php");
			function randomString($length = 6) {
				$str = "";							
				$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
				$max = count($characters) - 1;
				for ($i = 0; $i < $length; $i++) {
					$rand = mt_rand(0, $max);
					$str .= $characters[$rand];
				}
				return $str;
			}
			$randomVar = randomString();

			$email = $_POST["email"];
			$status = 0;			
			$message = '<html>
							<head>
							  <title> Account Activation </title>
							</head>
							<body>
							 <div>
							  	<p>Dear User,</p> 
							  	<p> Your User name is : '.$email.' </p>
							  	<p> New Password is : '.$randomVar.' </p>
							  	 <a href="http://www.royalsoftwaresolution.com/RoyalMaster/"> Click Here </a> to Login to Your Account
							 </div>
							</body>
						</html>';
			$mail->setFrom('admin@royalsoftwaresolution.com', 'Royal Softwares');
			$mail->addCustomHeader("CC: hr@royalsoftwaresolution.com , madhu@royalsoftwaresolution.com");
			$mail->addAddress($email, "user");     // Add a recipient
		    $mail->Subject = 'Email Verification';
	    	$mail->Body    = $message;    			       
		$randomVar = md5($randomVar);
		$query = "UPDATE rsm_login SET Password='".$randomVar."' where userName ='".$email."'";
		$res = query($query);
			if($res){		
				if($mail->send()){		
					echo json_encode(array('Status' => "1" ));
				}else{
					echo json_encode(array('Status' => $mail->ErrorInfo ));
				}
			}	
			else{
				echo json_encode(array('Status' => mysqli_error($conn)));
			}
		}


		if($_POST["layout"] == "1003"){

			$userName = $_POST["userName"];
			$dob = $_POST["dob"];
			$country = $_POST["country"];
			$state = $_POST["state"];
			$zip = $_POST["zip"];
			$organization = $_POST["organization"];
			$department = $_POST["department"];
			$id = $_POST["id"];
			$blood = $_POST["blood"];
			$techskills = $_POST["technical"];
			$mobile = $_POST["mobile"];
			$office = $_POST["office"];
			$webbsite = $_POST["webbsite"];
			$others = $_POST['others'];
			
			$query = "update rsm_profile set dob='".$dob."', country = '".$country."', state='".$state."', zip='".$zip."', college='".$organization."', department='".$department."', blood='".$blood."', id='".$id."', techskills='".$techskills."', mobile='".$mobile."', office='".$office."', webbsite='".$webbsite."',others='".$others."' where userName='".$userName."'";
			$res = query($query);
				if($res){
					echo json_encode(array('Status' => "1" ));
				}else{
					echo json_encode(array('Status' => mysqli_error($conn)));
				}
		}

		if($_POST["layout"] == "1004"){
			$email = $_POST["email"];
			
			$query = "SELECT CONCAT_WS(' ', u.fname, u.lname) as Name , u.email as EMail , p.dob as DateofBirth, p.state as Location, CONCAT_WS(' ', p.college, p.department) as College_Department, p.techskills as TechnicalSkills, p.mobile as Mobile_Number , p.webbsite as Website, p.others as Others FROM rsm_profile p, rsm_user u WHERE p.userName='".$email."' and p.userName = u.email";			

			$res = query($query);
			if(mysqli_num_rows($res) !== 0 ){
				$row = $res->fetch_assoc();
				$row["Status"] = 1;
				echo json_encode($row);				
			}else{
				echo json_encode(array('Status' => "Invalid UserName and Password"));
			}
		}
		// Useful link screen api starts here
		if($_POST['layout'] === "1005"){ 
			$sql = "select f.name as Author , c.cat_name as Category, f.filename as File_Name ,f.Amount as Price, f.email as Email from rsm_files f , rsm_category c where c.cat_id= f.category";
			$res = query($sql);
			if($res->num_rows  >= 1) {
				$val = 0;
				$row = array('Name' => [], 'Category' => [], 'File_Name' => [],'Price' =>[], 'Email' => [], 'Download' =>[] );
				while($r = $res -> fetch_assoc()) {
				    $row['Name'][$val] = $r['Author'];
				    $row['Category'][$val] = $r['Category'];
				    $row['File_Name'][$val] = $r['File_Name'];
                                    $row['Price'][$val] = $r['Price'];
				    $row['Email'][$val] = $r['Email'];
				    $row['Download'][$val] = 'Download';
				    $val++;
				}
	        	$result_array =  array("tableHeader" => [["heading"=>"Author"] ,["heading"=>"Category"], ["heading" => "File_Name" ],["heading" => "Price"], ["heading" => "Email"] , ["heading" => "Download"]],"tableData" => [$row]);
				
		  	 	echo json_encode($result_array);
	        }
	        else {
	      		 echo json_encode(array('Status' => 'Failure'));
	   		} 
			exit();
		}	

		if($_POST["layout"] == "1006"){

			$userName = $_POST["userName"];
			$password = md5 ($_POST["password"]);
			
			$query = "update rsm_login set Password='".$password."' where userName='".$userName."'";
			$res = query($query);
				if($res){
					echo json_encode(array('Status' => "1" ));
				}else{
					echo json_encode(array('Status' => mysqli_error($conn)));
				}
		}	

            if($_POST['layout'] === "1007"){ 
			$cat_id = $_POST['cat_id'];
			$div_id = $_POST['div_id'];
			$query = "select * from rsm_test where cat_id ='".$cat_id."' and div_id='".$div_id."'  limit 30";
			$res = query($query);
			if(mysqli_num_rows($res) !== 0 ){
				$rows = array();
              while($r = mysqli_fetch_assoc($res)) {
          		$rows[] = $r;
             }
				echo json_encode($rows);				
			}else{
				echo json_encode(array('Status' => 0));
			}
			exit();
		}

      if($_POST['layout'] === "1008"){ 
			$cat_id = $_POST['cat_id'];
			$div_id = $_POST['div_id'];
			//$question = $_POST['question'];
			$sql = "select c.cat_name , d.div_name from rsm_category c , rsm_div d where c.cat_id ='".$cat_id."' and d.div_id='".$div_id."'";
			$res = query($sql);
			if(mysqli_num_rows($res) !== 0 ){
				$row = $res->fetch_assoc();
				echo json_encode($row);				
			}else{
				echo json_encode(array('Status' => "Error"));
			}

      }

	if($_POST['layout'] === "1009"){ 
			$userName = $_POST['userName'];
			$test_id = $_POST['test_id'];
			$cat_id = $_POST["cat_id"];
			$div_id = $_POST["div_id"];
			$correct_option = $_POST["correct_option"];
			$entered_option = $_POST["entered_option"];
			$correct_answer = $_POST["correct_answer"];
			$entered_answer = $_POST["entered_answer"];
			$test_date = date("Y/m/d");
			$sql = "CREATE TABLE IF NOT EXISTS `$userName` (test_id varchar(3), cat_id varchar(10), div_id varchar(10), correct_option varchar(300), entered_option varchar(300), correct_answer varchar(300), entered_answer varchar(500), test_date date )";
			$res = query($sql);
			$sql = "INSERT INTO `$userName` VALUES ('".$test_id."','". $cat_id."', '".$div_id."', '".$correct_option."', '".$entered_option."', '".$correct_answer."', '".$entered_answer."', '".$test_date."')";
			echo $sql;
			$res = query($sql);
			if($sql){
				echo json_encode(array('Status' => 1));				
			}else{
				echo json_encode(array('Status' => "Invalid UserName and Password"));
			}
      }  



      if($_POST['layout'] === "1010"){ 
		   $userName = $_POST["userName"];
			$sql = "SELECT a.*, COUNT( correct_option ) as 'Correct Answer' FROM .`$userName` a WHERE correct_option = entered_option group by (test_date)";
			$res = query($sql);
			if($res->num_rows  >= 1) {
				$val = 0;
				$row = array( 'Test Date' =>[],'Category' => [], 'Division' => [], 'Correct Answer' => [], 'View' => []);
				while($r = $res -> fetch_assoc()) {
				    
				    $row['Category'][$val] = $r['cat_id'];
				    $row['Division'][$val] = $r['div_id'];
				    $row['Test Date'][$val] = $r['test_date'];
				    $row['Correct Answer'][$val] = $r['Correct Answer'];
				    $row['View'][$val] = 'View';
				    $val++;
				}
	        	$result_array =  array("tableHeader" => [["heading" => "Test Date"], ["heading"=>"Category"], ["heading" => "Division" ], ["heading" => "Correct Answer"],["heading" => "View"]],"tableData" => [$row]);
				
		  	 	echo json_encode($result_array);
	        }
	        else {
	      		 echo json_encode(array('Status' => 'Failure'));
	   		} 
			exit();
		}	




		if($_POST['layout'] === "1011"){ 
			$userName = $_POST["userName"];
			
			//$sql = "select balance from  rsm_payment where userName=".`$userName`;
			$sql = "select * from  rsm_payment where userName='".$userName."'";
			$result = query($sql);
			if($result->num_rows >= 1) {
		  	 	while($r = $result -> fetch_assoc()) {
				    
				    $row['balance']= $r['balance'];
				}
				echo json_encode($row);
	        }
	        else {
	      		 echo json_encode(array('Status' => 'Failure'));
	   		} 
			exit();
		}

		if($_POST['layout'] === "1012"){ 
		   $userName = $_POST["userName"];
			$sql = "SELECT a.*, COUNT( correct_option ) as 'Correct Answer' FROM .`$userName` a WHERE correct_option = entered_option ";
			$res = query($sql);
			if($res->num_rows  >= 1) {
				$val = 0;
				$row = array( 'Test Date' =>[],'Category' => [], 'Division' => [], 'Correct Answer' => []);
				while($r = $res -> fetch_assoc()) {
				    
				    $row['Category'][$val] = $r['cat_id'];
				    $row['Division'][$val] = $r['div_id'];
				    $row['Test Date'][$val] = $r['test_date'];
				    $row['Correct Answer'][$val] = $r['Correct Answer'];
				    $val++;
				}
	        	$result_array =  array("tableHeader" => [["heading" => "Test Date"], ["heading"=>"Category"], ["heading" => "Division" ], ["heading" => "Correct Answer"]],"tableData" => [$row]);
				
		  	 	echo json_encode($result_array);
	        }
	        else {
	      		 echo json_encode(array('Status' => 'Failure'));
	   		} 
			exit();
		}	

		
	if($_POST['layout'] === "1013"){ 
		   $userName = $_POST["userName"];
		   $test_date = $_POST["test_date"];
			$sql = "SELECT c.cat_name as 'Category' , d.div_name as 'Division' , a.entered_option , a.correct_option FROM `test@gmail.com` a , rsm_category c , rsm_div d WHERE a.cat_id = c.cat_id and a.div_id = d.div_id and test_date='".$test_date."'";
			$res = query($sql);
			if($res->num_rows  >= 1) {
				$val = 0;
				$row = array( 'Test Date' =>[],'Category' => [], 'Division' => [], 'Entered Option' => [],'Correct Option' => [], 'View' => []);
				while($r = $res -> fetch_assoc()) {
				    
				    $row['Category'][$val] = $r['Category'];
				    $row['Division'][$val] = $r['Division'];
				    $row['Entered Option'][$val] = $r['Entered_Option'];
				    $row['Correct Option'][$val] = $r['Correct_Option'];
				    $row['View'][$val] = 'View';
				    $val++;
				}
	        	$result_array =  array("tableHeader" => [["heading" => "Test Date"], ["heading"=>"Category"], ["heading" => "Division" ], ["heading" => "Entered Option"],["heading" => "Correct Option"],["heading" => "View"]],"tableData" => [$row]);
				
		  	 	echo json_encode($result_array);
	        }
	        else {
	      		 echo json_encode(array('Status' => 'Failure'));
	   		} 
			exit();
		}
		
	}
	
	if($_POST['layout'] === "1014"){ 
		   $userName = $_POST["userName"];
		   $test_date = $_POST["test_date"];
			$sql = "SELECT a.*, COUNT( correct_option ) as 'Correct Answer' FROM .`$userName` a WHERE correct_option = entered_option and test_date='".$test_date."'";
			$res = query($sql);
			if($res->num_rows  >= 1) {
				$val = 0;
				$row = array( 'Test Date' =>[],'Category' => [], 'Division' => [], 'Correct Answer' => []);
				while($r = $res -> fetch_assoc()) {
				    
				    $row['Category'][$val] = $r['cat_id'];
				    $row['Division'][$val] = $r['div_id'];
				    $row['Test Date'][$val] = $r['test_date'];
				    $row['Correct Answer'][$val] = $r['Correct Answer'];
				    $val++;
				}
	        	$result_array =  array("tableHeader" => [["heading" => "Test Date"], ["heading"=>"Category"], ["heading" => "Division" ], ["heading" => "Correct Answer"]],"tableData" => [$row]);
				
		  	 	echo json_encode($result_array);
	        }
	        else {
	      		 echo json_encode(array('Status' => 'Failure'));
	   		} 
			exit();
		}
		
		
	

?>
