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
				<h1 align="center">MANAGER PAGE

					<?php

					echo "<p>";
					echo "<p>";
					echo "User ID: " . $_SESSION['UID'];
					echo "<p>";
					echo "First Name: " . $_SESSION['FirstName'];
					echo "<p>";
					echo "Last Name: " . $_SESSION['LastName'];
					echo "<p>";
					echo "Type: " . $_SESSION['Type'];
					echo "<p>";
					echo "TID: " . $_SESSION['TID'];
					echo "<p>";


					?>


				</h1>
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