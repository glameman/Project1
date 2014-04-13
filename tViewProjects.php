<?php

ob_start();

session_start();

?>
<html>
	<head>
		<title>Organization Projects</title>

		<!-- Latest compiled and minified CSS -->
		<!--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">-->
		<link rel="stylesheet" href="css/bootstrap.css">	

		<!--simple sidebar css-->
		<link href="css/simple-sidebar.css" rel="stylesheet">

	</head>
<body>
	<h1 align="center">Organization Projects</h1>

<?php

	$con = mysql_connect("localhost","root","pass") or die("Could not connect to database");
	mysql_select_db("my_db") or die("Could not find database");

	$tid = $_SESSION['TID'];

	$query = mysql_query("SELECT P.ProjectID, P.ProjectName, P.Status, P.StartDate, P.ExpectedEndDate, U.FirstName, U.LastName FROM users U, project P WHERE  U.TID = $tid and P.MID = U.UID");

	$numrows = mysql_num_rows($query);
	// Check connection
	
	echo "<br><br>";

	echo "<table class='table table-striped' width='80%' align='center'>
		<tr>
		<th>ProjectID</th>
		<th>ProjectName</th>
		<th>Status</th>
		<th>StartDate</th>
		<th>ExpectedEndDate</th>
		<th>MFirstName</th>
		<th>MLastName</th>
		</tr>";

	while($row = mysql_fetch_assoc($query))
	{
		echo "<tr>";
		echo "<td>" . $row['ProjectID'] . "</td>";
		echo "<td>" . $row['ProjectName'] . "</td>";
		echo "<td>" . $row['Status'] . "</td>";
		echo "<td>" . $row['StartDate'] . "</td>";
		echo "<td>" . $row['ExpectedEndDate'] . "</td>";
		echo "<td>" . $row['FirstName'] . "</td>";
		echo "<td>" . $row['LastName'] . "</td>";
		echo "</tr>";
	}
	
	echo "</table>";

	echo "<br><br><a href='membersarea.php'>Click here to enter the members area</a>";

	mysql_close($con);
?>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>