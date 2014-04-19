<?php
	
	ob_start();

	session_start();

	$host = "localhost";
	$username = "root";
	$password = "pass";
	$database =  "my_db";
	$table = "users";

	// variables
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$type = $_POST['type'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$tenantID = $_SESSION['TID'];
		$PID = $_SESSION['PID'];


		$conn = mysql_connect("localhost", "root", "pass") or die(mysql_error());
		echo "connected<br><br>";

		mysql_select_db("$database");
		echo "database found<br><br>";

		$con = mysql_connect("localhost","root","pass") or die("Could not connect to database");
		mysql_select_db("my_db") or die("Could not find database");

		$status = $_POST['type'];
		echo $_POST['type'];
		echo $PID;

		$query = mysql_query("UPDATE project
								SET Status='$type'
								WHERE ProjectID=$PID");

		mysql_close($conn);


		header("Location:mViewProjects.php")

		
?>