<?php

	ob_start();

	session_start();
?>
<!DOCTYPE html>

<html>
	<head>
		<title>Add users</title>
		<link href="styles/main.css" rel="stylesheet"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

		<!--simple sidebar css-->
		<link href="css/simple-sidebar.css" rel="stylesheet">

	</head>
  <body bgcolor="#DCDCDC">
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
		      <a class="navbar-brand" href="index.php">TAG Project Management Tool</a>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav navbar-right">
			        <li><a href="tenant.php">Home Page</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</header>
  	<H1 ALIGN="CENTER">Add users</H1>
	<HR WIDTH="36%" SIZE="5" NOSHADE="NOSHADE">
	    <form tag="Create Logon" action="addusersdb.php" method="post">
		    <div align="center">
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

 				</br><br>
		            <!--<form action="upload_file.php" method="post"
			    enctype="multipart/form-data">
			    <label for="file">Organization Logo Upload:</label>
			    <input type="file" name="file" id="file"><br>
                            </form>
 				</br>-->
		            <input type="submit" value="Add User" />
			  	</br><br>
			  	<?php if(isset($_GET['msg']))
			  		echo "<font color='green'><br>" . $_GET['msg'] . "</font><br>";
			  	?>
			  	<?php if(isset($_GET['maxmsg']))
			  		echo "<font color='red'><br>" . $_GET['maxmsg'] . "</font><br>";
			  	?>
		    </div>
	    </form><br>
	    <div align="center">
	    	<button><a href="tenant.php"><font color="000000">Finish</font></a></button>
	    </div><br>
	    <p align="center">Note: Please make sure your details are correct before submitting and that all fields marked with * are completed!</p>
 

    
 
	    <script src="js/bootstrap.min.js"></script>
  </body>
</html>