<?php
	require "db_connect.php";

$sql = 'SELECT * FROM sms_store';
		
$query = mysqli_query($con, $sql);

$sql2 = 'SELECT * FROM state';
		
$query2 = mysqli_query($con, $sql2);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($con));
}
?>

<html >
<head>
  <meta charset="UTF-8">
  <title>Clone Sms/inBox</title>
   <meta name="viewport" content="width=device-width">


  
  <link rel="stylesheet" href="/SmsClone/css/main.css">
  

   
  

</head>

<body>


<script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyDfeoe54efFHF6WXamLD7BAaQc7sX2Q1Lw",
    authDomain: "sample1-6f480.firebaseapp.com",
    databaseURL: "https://sample1-6f480.firebaseio.com",
    projectId: "sample1-6f480",
    storageBucket: "sample1-6f480.appspot.com",
    messagingSenderId: "296352393592"
  };
  firebase.initializeApp(config);
  
  var bigOne = document.getElementById('bigOne');
  var dbref = firebase.database().ref("text");
  //var dbref = firebase.database().ref().child('text');
  dbref.on('value', snap=> bigOne.innerText = snap.val());
  
</script>


<form method="get">
  <aside id="sidebar" class="nano">

<div id="getdata"> </div>
 
<script>
  
  function dis(){
  
  xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","select.php", false);
  xmlhttp.send(null);
  document.getElementById("getdata").innerHTML=xmlhttp.responseText;
  
  }
  
  dis();
  
  setInterval(function(){
	dis();
  }, 10000);
  
  </script>

  <div class="nano-content">
  
	<h1 id="bigOne"></h1>
  
  <div class="logo-container"><b>Clone</B>Sms</div><a href="../SmsClone/compose.html" class="compose-button">Compose</a>
    <menu class="menu-segment">
      <ul>
        <li class="active"><a href="../SmsClone/inbox.php">Sent Sms</a></li>
        
        
    
      </ul>
    </menu>
    <div class="separator"></div>
   
    <a href="index.html" class="logout-button">Log out</a>
   
   
    <div class="bottom-padding"></div>
  </div>
</aside>

<main id="main">
  <div class="overlay"></div>
  <header class="header" style="height:20%;">
<div class="search-box">
      <input placeholder="Search..."><span class="icon glyphicon glyphicon-search"></span>
    </div>
     <blockquote>
                    <h1><b><font size="7" color="black" face="Times New Roman">Sent Messages</font><font size="6" color="#800000"
                                                                                           face="Chiller">
                    </font></b><font color="#000080" face="French Script MT"><b>
                        <font face="Chiller" color="#800000" size="6">
                         
                         
                          
                            <input type=hidden name="index" size="20"></font></b></font>
                    </h1>
                </blockquote>
				</header>
  <div class="scrollstyle">
		<table class="data-table">
		
		<thead>
			<tr>
				<th>NO</th>
				<th>Sent To</th>
				<th>Message</th>
				<th>Sent via</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			//$amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row['sent_to'].'</td>
					<td>'.$row['message'].'</td>
					<td>'.$row['sms_type'].'</td>
					<td>'.$row['status'].'</td>
					
				</tr>';
			
			$no++;
		}?>
		</tbody>
		
	</table>
	
      </div>
             
 
</main>


    <script src="js/index.js"></script>

	</form>
</body>
</html>