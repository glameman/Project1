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
	        <div id="sidebar-wrapper" style="background-color: #000000">
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
                    
                    while($row = mysql_fetch_assoc($query))
					{
	                    echo "<div class='panel panel-default'>
							<!-- Default panel contents -->
							<div class='panel-heading'>
							  	<table width='100%'><tr>
							  	<td><b>Project ID</b></td>
							  	<td><b>Project Name</b></td>
							  	<td><b>Project Manager</b></td>
							  	<td><b>Status</b></td>
							  	<td><b>Start Date</b></td>
							  	<td><b>Expected End Date</b></td>
							  	</tr>

							  	<tr>
							  	<td>" . $row['ProjectID'] . "</td>
								<td>" . $row['ProjectName'] . "</td>
								<td>" . $row['FirstName'] . " " . $row['LastName'] . "</td>
								<td>" . $row['Status'] . "</td>
								<td>" . $row['StartDate'] . "</td>
								<td>" . $row['ExpectedEndDate'] . "</td>
								</tr></table>
							</div>
							<div class='panel-body'>
								<b>Employees Involved: </b>";

							$PID = $row['ProjectID'];
							$query2 = mysql_query("SELECT U.UID, U.FirstName, U.LastName 
												  FROM users U, requirements R 
												  WHERE  R.PID = $PID and R.UID = U.UID
												  GROUP BY U.LastName");

							$numrows1 = mysql_num_rows($query2);

							if($numrows1 == 0)
								echo "No employees assigned to this project.";

							$count = 1;
							while($row2 = mysql_fetch_assoc($query2))
							{
								if($count < $numrows1)
									echo $row2['FirstName'] . " " . $row2['LastName'] . ", ";
								else
									echo $row2['FirstName'] . " " . $row2['LastName'];
								$count = $count + 1;
							}
							$count = 1;

							echo "
							</div>
							</div>";
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