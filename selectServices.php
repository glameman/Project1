<!DOCTYPE html>

<html>
	<head>
		<title>Tenant Sign Up</title>
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
			        <li><a href="SignUp.html">New Tenant Sign Up</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</header>
  	<H1 ALIGN="CENTER">Select Services</H1>
	<HR WIDTH="36%" SIZE="5" NOSHADE="NOSHADE">
		<form action=".php" method="post" align="center">

			<table align="center" style="width:900px">
				<tr>
					<td><h3>Tenant</h3></td>
					<td><h3>Manager</h3></td>
					<td><h3>Worker</h3></td>
				</tr>
				<tr>
					<td align="center" valign="top"><table><tr><td align="left"><br>
						<input type="checkbox" name="formDoor[]" value="A" checked="true"/> View All Organization Projects<br /><br>
						<input type="checkbox" name="formDoor[]" value="B" checked="true"/> View All Organization Requirements<br /><br>
						<input type="checkbox" name="formDoor[]" value="C" checked="true"/> Add Users After Initial Sign Up<br /><br>
					</td></tr></table></td>
					<td align="center" valign="top"><table><tr><td align="left"><br>
						<input type="checkbox" name="formDoor[]" value="A" checked="true"/> Create New Project<br /><br>
						<input type="checkbox" name="formDoor[]" value="B" checked="true"/> Change Project Status<br /><br>
						<input type="checkbox" name="formDoor[]" value="C" checked="true"/> View Managed Projects<br /><br>
						<input type="checkbox" name="formDoor[]" value="D" checked="true"/> View Project Requirements<br /><br>
					</td></tr></table></td>
					<td align="center" valign="top"><table><tr><td align="left"><br>
						<input type="checkbox" name="formDoor[]" value="A" checked="true"/> View Assigned Requirements<br /><br>
						<input type="checkbox" name="formDoor[]" value="B" checked="true"/> Change Requirement Status<br /><br>
					</td></tr></table></td>
				</tr>
			</table><br><br><br>
			 
			<input disabled="true" type="submit" name="formSubmit" value="Submit" />//button disabled for now //in progress
		 
		</form>
    
 
	    <script src="js/bootstrap.min.js"></script>
  </body>
</html>