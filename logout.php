<?php 
	session_start(); //Start the current session
	session_destroy(); //Destroy it! So we are logged out now
	  exit(header("Location: login.php"));
?>