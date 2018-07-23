<?php 
	include("config.php");

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){		
		if($_POST["layout"] === "logout"){
			session_start(); //Start the current session
			session_destroy(); //Destroy it! So we are logged out now
			header("location: ../login.php");
		}

		if($_POST['layout'] === "3001"){ 
			$digits = 3;
			$randomVar = rand(pow(10, $digits-1), pow(10, $digits)-1);
			$userName = $_POST['userName'];
			$test_id = $randomVar;
			$title = $_POST["title"];
			$condition = $_POST["condition"];
			$min_yoe = $_POST["min_yoe"];
			$max_yoe = $_POST["max_yoe"];
			$start_date = $_POST["start_date"];
			$end_date = $_POST["end_date"];
			$skills_required = $_POST["skills_required"];
			$sql = "CREATE TABLE IF NOT EXISTS `$userName`_test (test_id varchar(10), title varchar(200), condition varchar(10), min_yoe varchar(3), max_yoe varchar(3), start_date date, end_date date, skills_required varchar(100) )";
			$res = query($sql);
		
			$sql = "INSERT INTO `$userName`_test VALUES ('".$test_id."','". $title."', '".$condition."', '".$min_yoe."', '".$max_yoe."', '".$start_date."', '".$end_date."', '".$skills_required."')";
			echo $sql;
			$res = query($sql);
			if($sql){
				echo json_encode(array('Status' => 1));				
			}else{
				echo json_encode(array('Status' => "Not able to create test"));
			}
      }
	}

?>