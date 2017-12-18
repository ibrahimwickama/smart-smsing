<?php

	require "db_connect.php";
	
	$phone = $_POST["phone"];
	$message = $_POST["message"];
	
	$status = $_POST["status"];

	
	$sql = " UPDATE sms_store SET status='$status' where sent_to='$phone' and message='$message' ";
	
	if(mysqli_query($con, $sql)){
		//echo "one row added";
		Header("Location: ../SmsClone/inbox.php");
	}else{
		echo "error in insertion..." .mysqli_error($con);
	}

        mysqli_close($con);

?>