<?php

ob_start();

session_start();

$username =  $_POST["username"];
$password =  $_POST["password"];

if($username&&$password)
{
	$con = mysql_connect("localhost","root","pass") or die("Could not connect to database");
	mysql_select_db("my_db") or die("Could not find database");

	$query = mysql_query("SELECT * FROM users WHERE Username = '$username'");

	$numrows = mysql_num_rows($query);

	if($numrows != 0)
	{
		while($row = mysql_fetch_assoc($query))
		{
			$dbusername = $row['Username'];
			$dbpassword = $row['Password'];
			$dbUID = $row['UID'];
			$dbfirstname = $row['FirstName'];
			$dblastname = $row['LastName'];
			$dbtype = $row['Type'];
			$dbTID = $row['TID'];
		}

		if($username == $dbusername && $password == $dbpassword)
		{
			echo "Login successful.";//" <a href='membersarea.php'>Click here to enter the members area</a>";
			$_SESSION['username']= $dbusername;
			$_SESSION['UID']= $dbUID;
			$_SESSION['FirstName']= $dbfirstname;
			$_SESSION['LastName']= $dblastname;
			$_SESSION['Type']= $dbtype;
			$_SESSION['TID']= $dbTID;

			if($_SESSION['Type'] == 'Manager')
			{
				header("Location: manager.php");
				die();
			}
			else if($_SESSION['Type'] == 'Worker')
			{
				header("Location: worker.php");
				die();
			}
			else if($_SESSION['Type'] == 'Tenant')
			{
				header("Location: tenant.php");
				die();
			}
			else
			{
				session_destroy();
				die();
			}
		}

		else
		{
			//echo "Incorrect password";
			$msg = "Password Incorrect";
			header("Location:index.php?msg=$msg");
			die();
		}
	}
	//else check for tenant login
	$con = mysql_connect("localhost","root","pass") or die("Could not connect to database");
	mysql_select_db("my_db") or die("Could not find database");

	$query = mysql_query("SELECT * FROM tenant WHERE Username = '$username'");

	$numrows = mysql_num_rows($query);

	if($numrows != 0)
	{
		while($row = mysql_fetch_assoc($query))
		{
			$dbusername = $row['Username'];
			$dbpassword = $row['Password'];
			$dbTID = $row['TID'];
			$dbfirstname = $row['FirstName'];
			$dblastname = $row['LastName'];
			$dbtype = $row['Type'];
		}

		if($username == $dbusername && $password == $dbpassword)
		{
			echo "Login successful.";//" <a href='membersarea.php'>Click here to enter the members area</a>";
			$_SESSION['username']= $dbusername;
			$_SESSION['TID']= $dbTID;
			$_SESSION['FirstName']= $dbfirstname;
			$_SESSION['LastName']= $dblastname;
			$_SESSION['Type']= $dbtype;

			if($_SESSION['Type'] == 'Tenant')
			{
				header("Location: tenant.php");
				die();
			}
			else
			{
				session_destroy();
				die();
			}
		}

		else
		{
			//echo "Incorrect password";
			$msg = "Password Incorrect";
			header("Location:index.php?msg=$msg");
			die();
		}
	}

	//////end of tenant login

	else
	{
		//die("That username does not exist");
		$msg = "That username does not exist";
		header("Location:index.php?msg=$msg");
		die();
	}
}
else
	{
		$msg = "You left one or more of the required fields blank";
		header("Location:index.php?msg=$msg");
	}
	//die("Please enter a username and password");

?>