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
	                <li><a href="tViewProjectsSB.php">View Projects</a>
	                </li>
	                <li><a href="tViewRequirementsSB.php">View Requirements</a>
	                </li>
	                <li><a href="addusersSB.php">Add Users</a>
	                </li>
	                <li><a href="logout.php"><div class="glyphicon glyphicon-off"></div> Sign Out</a>
	                </li>
	            </ul>
	        </div>
		
			<div class="page-content inset">
				<h1 align="center">TENANT PAGE

					<?php

					echo "<p>";
					echo "<p>";
					echo "Tenant ID: " . $_SESSION['TID'];
					echo "<p>";
					echo "First Name: " . $_SESSION['FirstName'];
					echo "<p>";
					echo "Last Name: " . $_SESSION['LastName'];
					echo "<p>";
					echo "Type: " . $_SESSION['Type'];

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