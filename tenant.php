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
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

		<!--simple sidebar css-->
		<link href="css/simple-sidebar.css" rel="stylesheet">
		
	</head>
	<body>
		
		<!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><font color="white">Welcome, <?php echo $_SESSION['FirstName']; ?></font>
                </li>
                <li><a href="tViewProjects.php">View Projects</a>
                </li>
                <li><a href="tViewRequirements">View Requirements</a>
                </li>
                <li><a href="#">Add Users</a>
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
		
		<!-- Latest compiled and minified JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>