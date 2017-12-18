<?php

	require "db_connect.php";
	
	$phone = $_POST["phone"];
	$message = $_POST["message"];
	$smstype = $_POST["smstype"];
        $comp = 'phone';
	
	$status = $_POST["status"];
        $status = $status ?: 'Pending';
	
	$sql = " insert into sms_store(sent_to, message, sms_type, status) values('$phone', '$message', '$smstype', '$status');";
	
	if(mysqli_query($con, $sql)){
		//echo "one row added";
		Header("Location: ../SmsClone/inbox.php");
	}else{
		echo "error in insertion..." .mysqli_error($con);
	}


?>