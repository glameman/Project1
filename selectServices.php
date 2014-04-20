<!DOCTYPE html>

<html>
	<head>
		<title>Tenant Sign Up</title>
		<link href="styles/main.css" rel="stylesheet"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">

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
			    
		  </div><!-- /.container-fluid -->
		</nav>
	</header>
  	<H1 ALIGN="CENTER">Select Services</H1>
	<HR WIDTH="36%" SIZE="5" NOSHADE="NOSHADE">
		<form action="storeTServices.php" method="post" align="center">

			<table align="center" style="width:900px">
				<tr>
					<td><h3>Tenant</h3></td>
					<td><h3>Manager</h3></td>
					<td><h3>Worker</h3></td>
				</tr>
				<tr>
					<td align="center" valign="top"><table><tr><td align="left"><br>
						<input type="checkbox" name="TViewProj" value="yes" checked="true"/> View All Organization Projects<br /><br>
						<input type="checkbox" name="TViewReq" value="yes" checked="true"/> View All Organization Requirements<br /><br>
						<input type="checkbox" name="TAddUsers" value="yes" checked="true"/> Add Users After Initial Sign Up<br /><br>
					</td></tr></table></td>
					<td align="center" valign="top"><table><tr><td align="left"><br>
						<input type="checkbox" name="MAddProj" value="yes" checked="true"/> Create New Project<br /><br>
						<input type="checkbox" name="MChangePStatus" value="yes" checked="true"/> Change Project Status<br /><br>
						<input type="checkbox" name="MViewProj" value="yes" checked="true"/> View Managed Projects<br /><br>
						<input type="checkbox" name="MViewPReq" value="yes" checked="true"/> View Project Requirements<br /><br>
					</td></tr></table></td>
					<td align="center" valign="top"><table><tr><td align="left"><br>
						<input type="checkbox" name="WViewReq" value="yes" checked="true"/> View Assigned Requirements<br /><br>
						<input type="checkbox" name="WChangeRStatus" value="yes" checked="true"/> Change Requirement Status<br /><br>
					</td></tr></table></td>
				</tr>
			</table><br><br><br>
			 
			<input type="submit" name="formSubmit" value="Next" />
		 
		</form>
    
 
	    <script src="js/bootstrap.min.js"></script>
  </body>
</html>