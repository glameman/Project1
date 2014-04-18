<?php

session_start();

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
	                <li class="sidebar-brand"><a href="manager.php"><font color="white">Welcome, <?php echo $_SESSION['FirstName']; ?></font></a>
	                </li>
	                <?php
	                if($_SESSION['MViewProj'] == 1)
	                	echo "<li><a href='mViewProjects.php'>View Projects</a></li>";
	                ?>
	                <?php
	                if($_SESSION['MAddProj'] == 1)
	                	echo "<li><a href='mAddProject.php'>Create New Project</a></li>";
	                ?>
	                <?php
	                if($_SESSION['MViewPReq'] == 1)
	                	echo "<li><a href='#'>View Project Requirements</a></li>";
	                ?>
	                <li><a href="logout.php"><div class="glyphicon glyphicon-off"></div> Sign Out</a>
	                </li>
	            </ul>
	        </div>
			<div class="page-content inset">
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
