<!DOCTYPE html>

<html>
    <head>
        <title>Add Project</title>
        <link href="styles/main.css" rel="stylesheet"/>

        <!-- Latest compiled and minified CSS -->
        <link rel="css/bootstrap.css">

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
                    <li><a href="logout.php">Log Out</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </header>
    <H1 ALIGN="CENTER">Step 1: Create New Project</H1>
    <HR WIDTH="36%" SIZE="5" NOSHADE="NOSHADE">
        <form tag="Create Logon" action="addusersdb.php" method="post">
            <div align="center">
                <?php if(isset($_GET['msg']))
                    echo "<font color='red'><br>" . $_GET['msg'] . "</font>";
                ?>
                    Project Name*: <input type="text" name="projname" />
                    </br></br>
                    Start Date* : <input type="text" name="startdate" />
                    </br><br>
                    Expected End Date* : <input type="text" name="enddate" />
                    </br><br>
                    Status:
                    <select class="selectpicker">
                        <option>-Select-</option>
                        <option>Started</option>
                        <option>In Progress</option>
                        <option>Completed</option>
                    </select>
                </br><br>
                    <!--<form action="upload_file.php" method="post"
                enctype="multipart/form-data">
                <label for="file">Organization Logo Upload:</label>
                <input type="file" name="file" id="file"><br>
                            </form>
                </br>-->
                    <input type="submit" value="Next" />
                </br><br>
                <p>Note: Please make sure your details are correct before submitting and that all fields marked with * are completed!.</p>

            </div>
        </form>
 

    
 
        <script src="js/bootstrap.min.js"></script>
  </body>
</html>