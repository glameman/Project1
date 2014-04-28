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
				<h1 ALIGN="CENTER">Tenant Information</h1>
				<HR WIDTH="36%" SIZE="10" NOSHADE="NOSHADE">
				<h2 align="center">

					<?php

					$con = mysql_connect("localhost","root","pass") or die("Could not connect to database");
						mysql_select_db("my_db") or die("Could not find database");
					
					$tenantID = $_SESSION['TID'];
					$query = mysql_query("SELECT CompanyLogoName 
										FROM tenant 
										WHERE TID = $tenantID");

					echo "<p>";
					echo "<p>";
					echo "First Name: " . $_SESSION['FirstName'];
					echo "<p>";
					echo "Last Name: " . $_SESSION['LastName'];
					echo "<p>";

					while($row = mysql_fetch_assoc($query)){
					echo "Company: " . $row['CompanyLogoName'];
					echo "<p>";
					}

					mysql_close($con);

					echo "Tenant ID: " . $_SESSION['TID'];
					echo "<p>";

					?>


				</h2>
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
