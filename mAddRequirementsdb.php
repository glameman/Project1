<?php
	
	ob_start();

	session_start();

	$host = "localhost";
	$username = "root";
	$password = "pass";
	$database =  "my_db";
	$table = "requirements";


	$conn = mysql_connect("localhost", "root", "pass") or die(mysql_error());
	echo "connected<br><br>";

	mysql_select_db("$database");
	echo "database found<br><br>";

	// escape variables for security
	$reqdescription = $_POST['reqdescription'];
	$type = $_POST['type'];
	$timerequired = $_POST['timerequired'];
	$projectID = $_POST['PID'];
	$workerID = $_POST['worker'];
	$status = "Started";


	mysql_query("INSERT INTO $table(PID, Req_Description, UID, Type, TimeRequired, Status) VALUES ('$projectID', '$reqdescription', '$workerID', '$type', '$timerequired', '$status')") or die(mysql_error());

	mysql_close($conn);

	$msg = "Requirement Successfully Added";
	header("Location:mAddRequirements.php?msg=$msg");
?>
