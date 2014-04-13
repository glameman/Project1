<?php

session_start();

?>
<html>
	<head>
		<title>Project Management Tool</title>

		<!-- Latest compiled and minified CSS -->
		<!--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">-->
		<link rel="stylesheet" href="css/bootstrap.css">	

		<!--simple sidebar css-->
		<link href="css/simple-sidebar.css" rel="stylesheet">

	</head>
<body>
<?php

	$con = mysql_connect("localhost","root","pass") or die("Could not connect to database");
	mysql_select_db("my_db") or die("Could not find database");

	$query = mysql_query("SELECT * FROM users");

	$numrows = mysql_num_rows($query);
	// Check connection
	
	echo "Number of rows: " . $numrows;
	echo "<br><br>";

	echo "<table border='1'>
		<tr>
		<th>Firstname</th>
		<th>Lastname</th>
		</tr>";

	while($row = mysql_fetch_assoc($query))
	{
		echo "<tr>";
		echo "<td>" . $row['FirstName'] . "</td>";
		echo "<td>" . $row['LastName'] . "</td>";
		echo "</tr>";
	}
	
	echo "</table>";

	////////////////////////Projects
	$userID = $_SESSION['UID'];
	$query = mysql_query("SELECT * FROM project WHERE MID = $userID");

	$numrows = mysql_num_rows($query);
	// Check connection
	
	echo "Number of rows: " . $numrows;
	echo "<br><br>";

	echo "<table class='table table-striped' width='80%' align='center'>
		<tr>
		<th> Project ID </th>
		<th> Project Name </th>
		<th> Status </th>
		<th> Start Date </th>
		<th> End Date </th>
		</tr>";

	while($row = mysql_fetch_assoc($query))
	{
		echo "<tr>";
		echo "<td>" . $row['ProjectID'] . "</td>";
		echo "<td>" . $row['ProjectName'] . "</td>";
		echo "<td>" . $row['Status'] . "</td>";
		echo "<td>" . $row['StartDate'] . "</td>";
		echo "<td>" . $row['ExpectedEndDate'] . "</td>";
		echo "</tr>";
	}
	
	echo "</table>";

	echo "<br><br><a href='membersarea.php'>Click here to enter the members area</a>";

	mysql_close($con);
?>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>