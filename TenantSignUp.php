<?php
	
	ob_start();

	session_start();

	$host = "localhost";
	$username = "root";
	$password = "kobenba";
	$database =  "my_db";
	$table = "tenant";


	$conn = mysql_connect("localhost", "root", "kobenba") or die(mysql_error());

	mysql_select_db("$database");

	// escape variables for security
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$orgname = $_POST['orgname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$type = 'Tenant';

	//Store tenant info
	$_SESSION['FirstName']= $firstname;
	$_SESSION['LastName']= $lastname;
	$_SESSION['username']= $username;
	$_SESSION['password']= $password;
	$_SESSION['Type'] = 'Tenant';

	mysql_query("INSERT INTO $table(FirstName, LastName, CompanyLogoName, Type, Username, Password) VALUES ('$firstname', '$lastname', '$orgname', '$type', '$username', '$password')") or die(mysql_error());

	mysql_close($conn);

	header("Location: storeTenantInfo.php");
	die();
?>