<?php

ob_start();

session_start();

	$username = $_SESSION['username'];
	$password = $_SESSION['password'];

	$con = mysql_connect("localhost","root","kobenba") or die("Could not connect to database");
	mysql_select_db("my_db") or die("Could not find database");

	$query = mysql_query("SELECT TID FROM tenant WHERE Username = '$username' and Password = '$password'");

	$numrows = mysql_num_rows($query);

	if($numrows != 0)
	{
		while($row = mysql_fetch_assoc($query))
		{
			$dbTID = $row['TID'];
		}

			$_SESSION['TID']= $dbTID;

			mysql_close();

			header("Location:addusers.php");
			die();
	}
	else
	{
		mysql_close();
		echo mysql_error();
		die();
	}

?>