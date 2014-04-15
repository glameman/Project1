<?php
	
	ob_start();

	session_start();

	$host = "localhost";
	$username = "root";
	$password = "pass";
	$database =  "my_db";
	$table = "tenant";

	// input variables
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$orgname = $_POST['orgname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$type = 'Tenant';

	if($firstname&&$lastname&&$orgname&&$username&&$password)
	{
		$conn = mysql_connect("localhost", "root", "pass") or die(mysql_error());

		mysql_select_db("$database");

		//Store tenant info
		$_SESSION['FirstName']= $firstname;
		$_SESSION['LastName']= $lastname;
		$_SESSION['username']= $username;
		$_SESSION['password']= $password;
		$_SESSION['Type'] = 'Tenant';

		mysql_query("INSERT INTO $table(FirstName, LastName, CompanyLogoName, Type, Username, Password) 
					 VALUES ('$firstname', '$lastname', '$orgname', '$type', '$username', '$password')") or die(mysql_error());

		$query = mysql_query("SELECT TID 
						  FROM tenant 
						  WHERE Username = '$username' and Password = '$password'");

		$numrows = mysql_num_rows($query);

		if($numrows != 0)
		{
			while($row = mysql_fetch_assoc($query))
			{
				$dbTID = $row['TID'];
			}

				$_SESSION['TID']= $dbTID;

				mysql_close();

				header("Location:selectServices.php");
				die();
		}
		else
		{
			mysql_close();
			echo mysql_error();
			die();
		}
	}
	else
	{
		$msg = "You left one or more of the required fields blank";
		header("Location:SignUp.php?msg=$msg");
	}
?>