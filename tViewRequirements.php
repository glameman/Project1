<?php

ob_start();

session_start();

?>
<html>
	<head>
		<title>Organization Requirements</title>

		<!-- Latest compiled and minified CSS -->
		<!--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">-->
		<link rel="stylesheet" href="css/bootstrap.css">	

		<!--simple sidebar css-->
		<link href="css/simple-sidebar.css" rel="stylesheet">

	</head>
	<body>
	<h1 align="center">Ogranization Requirements</h1>
	
	<?php

	$con = mysql_connect("localhost","root","pass") or die("Could not connect to database");
	mysql_select_db("my_db") or die("Could not find database");

	$tid = $_SESSION['TID'];

	$query = mysql_query("SELECT R.ReqID, R.Req_Description, R.Status, R.Type, R.TimeRequired, U.FirstName, U.LastName 
						  FROM users U, requirements R 
						  WHERE U.TID = $tid and R.UID = U.UID");

	$numrows = mysql_num_rows($query);
	// Check connection
	
	//echo "Number of rows: " . $numrows;
	echo "<br><br>";

	echo "<table class='table table-striped' width='80%' align='center'>
		<tr>
		<th>ReqID</th>
		<th>ReqDescription</th>
		<th>Status</th>
		<th>Type</th>
		<th>TimeRequired</th>
		<th>Assigned to</th>
		</tr>";

	while($row = mysql_fetch_assoc($query))
	{
		echo "<tr>";
		echo "<td>" . $row['ReqID'] . "</td>";
		echo "<td>" . $row['Req_Description'] . "</td>";
		echo "<td>" . $row['Status'] . "</td>";
		echo "<td>" . $row['Type'] . "</td>";
		echo "<td>" . $row['TimeRequired'] . "</td>";
		echo "<td>" . $row['FirstName'] . " " . $row['LastName'] . "</td>";
		echo "</tr>";
	}
	
	echo "</table>";

	echo "<br><br><a href='logout.php'>Logout</a>";

	mysql_close($con);
	?>

	<script src="js/bootstrap.min.js"></script>
	</body>
</html>