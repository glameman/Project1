<?php

ob_start();

session_start();

if($_SESSION['Type'] != 'Tenant')
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
	                <li class="sidebar-brand"><a href="tenant.php"><font color="white">Welcome, <?php echo $_SESSION['FirstName']; ?></font></a>
	                </li>
	                <?php
	                if($_SESSION['TViewProj'] == 1)
	                	echo "<li><a href='tViewProjectsSB.php'>View Projects</a></li>";
	                ?>
	                <?php
	                if($_SESSION['TViewReq'] == 1)
	                	echo "<li><a href='tViewRequirementsSB.php'>View Requirements</a></li>";
	                ?>
	                <?php
	                if($_SESSION['TAddUsers'] == 1)
	                	echo "<li><a href='tAddUsersSB.php'>Add Users</a></li>";
	                ?>
	                <li><a href="logout.php"><div class="glyphicon glyphicon-off"></div> Sign Out</a>
	                </li>
	            </ul>
	        </div>
		
			<div class="page-content inset">
				<h1 align="center">Organization Requirements</h1>

				
				
				
				
				
				
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
							<th>ID</th>
							<th>Description</th>
							<th>Status</th>
							<th>Type</th>
							<th>Time Required</th>
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