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
                <li class="sidebar-brand"><a href="#">Welcome, <?php echo $_SESSION['FirstName']; ?><a href="#"></a>
                </li>
                <li><a href="sql2.php">View My Requirements</a>
                </li>
                <li><a href="#">Shortcuts</a>
                </li>
                <li><a href="#">Overview</a>
                </li>
                <li><a href="#">Events</a>
                </li>
                <li><a href="#">About</a>
                </li>
                <li><a href="#">Services</a>
                </li>
                <li><a href="#">Contact</a>
                </li>
            </ul>
        </div>

		<div class="page-content inset">
		<h1 align="center">WORKER PAGE

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
			echo "<p><a href='membersarea.php'>Click here to enter the members area</a>";

			?>


		</h1>
	</div>
		
		<!-- Latest compiled and minified JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>