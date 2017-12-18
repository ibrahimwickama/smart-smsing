<?php

	$host = "localhost";
	$user = "id1784941_wickerlabs";
	$password = "123456789"; 
	$db = "id1784941_clone_karibu";
	
	$con = mysqli_connect($host, $user, $password, $db);
	
	if(!$con){
		die("Error in connection" .mysqli_connect_error());
	}else{
		//echo "Connection success";
                //Header("Location: ../SmsClone/inbox.php");
	}

?>