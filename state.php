<?php

	require "db_connect.php";
	
	$phone_state = $_POST["phone_state"];

	
	$sql = " UPDATE state SET phone_state='$phone_state' ";
	
	if(mysqli_query($con, $sql)){
		//echo "one row added";
		Header("Location: ../SmsClone/inbox.php");
	}else{
		echo "error in insertion..." .mysqli_error($con);
	}

?>