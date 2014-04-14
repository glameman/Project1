<?php

ob_start();

session_start();

if($_SESSION['Type'] != 'Worker')
{
	header("location: nopermission.php");
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Project Management Tool</title>
		<link href="styles/main.css" rel="stylesheet"/>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="css/bootstrap.css">

		<!--simple sidebar css-->
		<link href="css/simple-sidebar.css" rel="stylesheet">
		
	</head>
	<body style="background-color:#F5F5DC;">

		<div id="wrapper">
		
			<!-- Sidebar -->
	        <div id="sidebar-wrapper">
	            <ul class="sidebar-nav">
	                <li class="sidebar-brand"><a href="worker.php"><font color="white">Welcome, <?php echo $_SESSION['FirstName']; ?></font></a>
	                </li>
	                <li><a href="sql2.php">View My Requirements</a>
	                </li>
	                <li><a href="wViewRequirements.php">View My Requirements With Sidebar</a>
	                </li>
	                <li><a href="#">Overview</a>
	                </li>
	                <li><a href="#">Events</a>
	                </li>
	                <li><a href="#">About</a>
	                </li>
	                <li><a href="#">Services</a>
	                </li>
	                <li><a href="logout.php"><div class="glyphicon glyphicon-off"></div> Sign Out</a>
	                </li>
	            </ul>
	        </div>

			<div class="page-content inset">
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

						mysql_close($con);
						?>


			</div>
		</div>
		
		<!-- JavaScript -->
	    <script src="js/jquery-1.10.2.js"></script>
	    <script src="js/bootstrap.js"></script>

	    <!-- Custom JavaScript for the Menu Toggle -->
	    <script>
	    $("#menu-toggle").click(function(e) {
	        e.preventDefault();
	        $("#wrapper").toggleClass("active");
	    });
	    </script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>