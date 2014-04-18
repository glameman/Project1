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
	        <div id="sidebar-wrapper" style="background-color: #192E40">
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
				<h1 align="center">Organization Projects</h1>

					<?php

						$con = mysql_connect("localhost","root","pass") or die("Could not connect to database");
						mysql_select_db("my_db") or die("Could not find database");

						$tid = $_SESSION['TID'];

						$query = mysql_query("SELECT P.MID, P.ProjectID, P.ProjectName, P.Status, P.StartDate, P.ExpectedEndDate, U.FirstName, U.LastName 
											  FROM users U, project P 
											  WHERE  U.TID = $tid and P.MID = U.UID
											  ORDER BY U.LastName, P.ProjectID");

						$numrows = mysql_num_rows($query);
						// Check connection
						
						echo "<br><br>";
/*
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
						
						echo "</table>";*/

						//mysql_close($con);
					
                    
                    while($row = mysql_fetch_assoc($query))
					{
                    echo "<div class='panel panel-default'>
					  <!-- Default panel contents -->
					  <div class='panel-heading' style='background-color: #324759'>
					  	<table width='100%'><tr>
					  	<td>
						  	<h3><font color='white'>Project ID: " . $row['ProjectID'] . "<br>
						  	Project Name: " . $row['ProjectName'] . "<br></font></h3>
						</td>
						<td>
							<h3><font color='white'>Project Manager: " . $row['FirstName'] . " " . $row['LastName'] . "<br>
						</td>
						</tr></table>
						</div>
					  <div class='panel-body'>
					    <p><b>Status: </b>" . $row['Status'] . "<br>
					    <b>Start Date: </b>" . $row['StartDate'] . "<br>
					    <b>Expected End Date: </b>" . $row['ExpectedEndDate'] . "</p>
					  </div>

					  ";
					  $PID = $row['ProjectID'];
					  $query2 = mysql_query("SELECT U.UID, U.FirstName, U.LastName 
											  FROM users U, requirements R 
											  WHERE  R.PID = $PID and R.UID = U.UID");
					  
					  echo "
					  <table class='table' style='background-color: #CCCCCC'>
					    <tr>
					    	<td><b>#</b></td>
					    	<td><b>Employee ID</b></td>
					    	<td><b>Employee Name</b></td>
					    </tr>";

					    $count = 1;
					    while($row2 = mysql_fetch_assoc($query2))
					  {
					    echo "
					    <tr>
					    	<td>" . $count . "</td>
					    	<td>" . $row2['UID'] . "</td>
					    	<td>" . $row2['FirstName'] . " " . $row2['LastName'] ."</td>
					    </tr>";
						}

						echo "
					  </table>
					</div><br>";

					}
					mysql_close();
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