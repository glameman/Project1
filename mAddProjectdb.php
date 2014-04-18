<?php
	
	ob_start();

	session_start();

	$host = "localhost";
	$username = "root";
	$password = "pass";
	$database =  "my_db";
	$table = "project";


	$conn = mysql_connect("localhost", "root", "pass") or die(mysql_error());
	echo "connected<br><br>";

	mysql_select_db("$database");
	echo "database found<br><br>";

	// escape variables for security
	$projname = $_POST['projname'];
	$status = "Started";
	$startdate = $_POST['startdate'];
	$enddate = $_POST['enddate'];
	$managerID = $_SESSION['UID'];

	mysql_query("INSERT INTO $table(ProjectName, MID, Status, StartDate, ExpectedEndDate) VALUES ('$projname', '$managerID', '$status', '$startdate', '$enddate')") or die(mysql_error());

	mysql_close($conn);

	$msg = "Project Successfully Added";
	header("Location:Manager.php?msg=$msg");
?>
