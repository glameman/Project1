<?php

session_start();

?>
<html>
	<head>
		<title>Manager Project</title>

		<!-- Latest compiled and minified CSS -->
		<!--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">-->
		<link rel="stylesheet" href="css/bootstrap.css">	

		<!--simple sidebar css-->
		<link href="css/simple-sidebar.css" rel="stylesheet">

	</head>
	<body>
		<h1 align="center">My Projects</h1>
		<?php

		$con = mysql_connect("localhost","root","pass") or die("Could not connect to database");
		mysql_select_db("my_db") or die("Could not find database");

		// Check connection
		
		//echo "Number of rows: " . $numrows;
		echo "<br><br>";

		////////////////////////Projects
		$userID = $_SESSION['UID'];
		$query = mysql_query("SELECT * 
							  FROM project 
							  WHERE MID = $userID");

		$numrows = mysql_num_rows($query);
		// Check connection
		

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

		echo "<br><br><a href='logout.php'>Logout</a>";

		mysql_close($con);
		?>
		
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>