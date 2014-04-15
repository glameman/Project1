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
				<h1 align="center">Add Users</h1>
					<HR WIDTH="36%" SIZE="5" NOSHADE="NOSHADE">
					    <form tag="Create Logon" action="addusersdbSB.php" method="post">
						    <div align="center">
						    	<?php if(isset($_GET['msg']))
							  		echo "<font color='green'>" . $_GET['msg'] . "</font><br><br>";
							  	?>
							  	<?php if(isset($_GET['maxmsg']))
							  		echo "<font color='red'>" . $_GET['maxmsg'] . "</font><br><br>";
							  	?>
							    Username*: <input type="text" name="username" />
				 				</br></br>
							    Password*: <input type="password" name="password" />
				 				</br><br>
							    First Name* : <input type="text" name="firstname" />
				 				</br><br>
							    Last Name* : <input type="text" name="lastname" />
				 				</br><br>
				 				Type: 
							   	<select class="selectpicker" name="type">
								    <option>Manager</option>
								    <option>Worker</option>
								</select>
				 				</br><br><br>
						            <input type="submit" value="Add User" />
							  	</br><br>
						    </div>
					    </form>
				
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