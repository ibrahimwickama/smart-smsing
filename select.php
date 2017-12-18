<?php

	$host = "localhost";
	$user = "id1784941_wickerlabs";
	$password = "123456789"; 
	$db = "id1784941_clone_karibu";
	
	$con = mysqli_connect($host, $user, $password, $db);
	
	$sql2 = 'SELECT * FROM state';
		
    $query2 = mysqli_query($con, $sql2);
	
	while ($row = mysqli_fetch_array($query2))
		{
			echo '<h4>Phone Status: '.$row['phone_state'].'</h4>';
		}

?>