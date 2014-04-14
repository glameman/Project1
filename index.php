<?php

session_start();

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Project Management Tool</title>

		<!-- Latest compiled and minified CSS -->
		<!--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">-->
		<link rel="stylesheet" href="css/bootstrap.css">	

		<!--simple sidebar css-->
		<link href="css/simple-sidebar.css" rel="stylesheet">

	</head>
	<body>
		<header>
			<nav class="navbar navbar-default" role="navigation">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#">TAG Project Management Tool</a>
			    </div>
			    <!-- Collect the nav links, forms, and other content for toggling -->
 			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
 			      <ul class="nav navbar-nav navbar-right">
 			        <li><a href="SignUp.php">New Tenant Sign Up</a></li>
 			      </ul>
 			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</header>

		<br><br><br><br>
		<div align="center">
			<div class="panel panel-primary" style="width: 675px">
			  	<div class="panel-heading">
			    	<h2 class="panel-title" align="left"><b>Login</b></h2>
			  	</div>

			  	<div align="center">
				    <?php if(isset($_GET['msg']))
				  		echo "<font color='red'><br>" . $_GET['msg'] . "</font>";
				  	?>	
			    </div>
			  	<form action="login.php" method="post" align="center"><br><br>
					Username <input type="text" name="username"><br><br>
					Password &#160<input type="password" name="password"><br><br><br>
					<div class="panel-footer">
						<input type="submit"><br>
					</div>
				</form>
			</div>
		</div>

		<br><br><br><br><br><hr WIDTH="80%">


		<!-- Latest compiled and minified JavaScript -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
		
