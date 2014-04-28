<?php

session_start();

?>

<!DOCTYPE html>

<html>
    <head>
        <title>Add Project</title>
        <link href="styles/main.css" rel="stylesheet"/>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

        <!--simple sidebar css-->
        <link href="css/simple-sidebar.css" rel="stylesheet">

    </head>
    <body style="background-color:#F5F5DC;">
        <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand"><a href="manager.php"><font color="white">Welcome, <?php echo $_SESSION['FirstName']; ?></font></a>
                    </li>
                    <?php
                    if($_SESSION['MViewProj'] == 1)
                        echo "<li><a href='mViewProjects.php'>View Projects</a></li>";
                    ?>
                    <?php
                    if($_SESSION['MAddProj'] == 1)
                        echo "<li><a href='mAddProject.php'>Add Project</a></li>";
                    ?>
                    <?php
                    if($_SESSION['MAddProj'] == 1)
                        echo "<li><a href='mAddRequirements.php'>Add Project Requirement</a></li>";
                    ?>
                    <li><a href="logout.php"><div class="glyphicon glyphicon-off"></div> Sign Out</a>
                    </li>
                </ul>
            </div>
    <div id="wrapper">
        <div class="page-content inset">

        <H1 ALIGN="CENTER">Create New Project</H1>
        <HR WIDTH="36%" SIZE="5" NOSHADE="NOSHADE">
            <form tag="Create Logon" action="mAddProjectdb.php" method="post">
                <div align="center">
                    <?php if(isset($_GET['msg']))
                        echo "<font color='red'><br>" . $_GET['msg'] . "</font>";
                    ?>

                    <table width="100%"><tr height="40px"><td width="50%"><div align="right">
                    Project Name*: &nbsp;</div></td><td><input type="text" name="projname" />
                    </td></tr><tr height="40px"><td><div align="right">
                    Start Date (YYYY-MM-DD): &nbsp;</div></td><td><input type="text" name="startdate" />
                    </td></tr><tr height="40px"><td><div align="right">
                    Expected End Date (YYYY-MM-DD): &nbsp;</div></td><td><input type="text" name="enddate" />
                    </tr></table><br>
                        <input type="submit" value="Submit" />
                        </br><br>
                    <p>Note: Please make sure your details are correct before submitting and that all fields marked with * are completed!.</p>
                </div>
            </form>
        </div>

    </div>


        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
