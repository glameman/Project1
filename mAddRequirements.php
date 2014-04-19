<!DOCTYPE html>

<html>
    <head>
        <title>Add Requirement</title>
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
                    <li><a href="manager.php">Home Page</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </header>
    <H1 ALIGN="CENTER">Create New Requirement</H1>
    <HR WIDTH="36%" SIZE="5" NOSHADE="NOSHADE">
        <form tag="Create Logon" action="mAddRequirementsdb.php" method="post">
            <div align="center">
                <?php if(isset($_GET['msg']))
                    echo "<font color='red'><br>" . $_GET['msg'] . "</font>";
                ?>
                Project ID: <input type="int" name="PID"/>
                </br></br>
                Requirement Description*: <input type="text" name="reqdescription" />
                </br></br>
                Type*: <select class="selectpicker" name="type">
                    <option>Manager</option>
                    <option>Worker</option>
                </select>
                </br><br>
                Time Required*: <input type="text" name="timerequired" />
                </br><br>
                    <input type="submit" value="Submit" />
                    </br><br>
                <p>Note: Please make sure your details are correct before submitting and that all fields marked with * are completed!.</p>
            </div>
        </form>
 

    
 
        <script src="js/bootstrap.min.js"></script>
  </body>
</html>
