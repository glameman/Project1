<?php
	
	ob_start();

	session_start();

	$host = "localhost";
	$username = "root";
	$password = "kobenba";
	$database =  "my_db";
	$table = "users";


	$conn = mysql_connect("localhost", "root", "kobenba") or die(mysql_error());
	echo "connected<br><br>";

	mysql_select_db("$database");
	echo "database found<br><br>";

	// variables
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$type = $_POST['type'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$tenantID = $_SESSION['TID'];

	$con = mysql_connect("localhost","root","kobenba") or die("Could not connect to database");
	mysql_select_db("my_db") or die("Could not find database");

	$query = mysql_query("SELECT * FROM users WHERE TID = '$tenantID'");

	$numrows = mysql_num_rows($query);

	if($numrows < 2)
	{

	mysql_query("INSERT INTO $table(FirstName, LastName, TID, Type, Username, Password) VALUES ('$firstname', '$lastname', '$tenantID', '$type', '$username', '$password')") or die(mysql_error());

	mysql_close($conn);

	$msg = "User Successfully Added";
	header("Location:addusers.php?msg=$msg");
	}
	else
	{
		mysql_close();

		$maxmsg = "User not added. Max number of users reached.";
		header("Location:addusers.php?maxmsg=$maxmsg");
	}
?>