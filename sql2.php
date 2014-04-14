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
		<h1 align="center">My Requirements</h1>

		<?php

		$con = mysql_connect("localhost","root","pass") or die("Could not connect to database");
		mysql_select_db("my_db") or die("Could not find database");

		////////////////////////Requirements
		$userID = $_SESSION['UID'];
		$query = mysql_query("SELECT R.ReqID, R.Req_Description, R.Status, P.ProjectID, P.ProjectName 
							  FROM project P, users U, requirements R 
							  WHERE U.UID = $userID and R.UID = U.UID and R.PID = P.ProjectID");

		$numrows = mysql_num_rows($query);
		// Check connection
		
		//echo "Number of rows: " . $numrows;
		echo "<br><br>";

		echo "<table class='table table-striped' width='80%' align='center'>
			<tr>
			<th> Req ID </th>
			<th> Req_Description </th>
			<th> Req Status </th>
			<th> Project ID </th>
			<th> Project Name </th>
			</tr>";

		while($row = mysql_fetch_assoc($query))
		{
			echo "<tr>";
			echo "<td>" . $row['ReqID'] . "</td>";
			echo "<td>" . $row['Req_Description'] . "</td>";
			/*echo "<td width='200'>" . "<select class='selectpicker' name='type' default='In Progress'>
					    <option>Started</option>
					    <option>In Progress</option>
					    <option>Completed</option>
					  </select>". $row['Status'] . " <form><input type='Submit' value='update'><form></td>";*/
			echo "<td>" . $row['Status'] . "</td>";
			echo "<td>" . $row['ProjectID'] . "</td>";
			echo "<td>" . $row['ProjectName'] . "</td>";
			echo "</tr>";
		}
		
		echo "</table>";

		echo "<br><br><a href='logout.php'>Logout</a>";

		mysql_close($con);
		?>
		
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>