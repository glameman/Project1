<!doctype html>
<html>
    <head>
        <title>Project Management Tool</title>

        <!-- Latest compiled and minified CSS -->
        <!--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="css/bootstrap.css">

        <!--simple sidebar css-->
        <link href="css/simple-sidebar.css" rel="stylesheet">
        <!--<style type="text/css">
 
            body {font-family:Arial, Sans-Serif;}
 
            #container {width:300px; margin:0 auto;}
 
            /* Nicely lines up the labels. */
            form label {display:inline-block; width:140px;}
 
            /* You could add a class to all the input boxes instead, if you like. That would be safer, and more backwards-compatible */
            form input[type="text"],
            form input[type="password"],
 
            form .line {clear:both;}
            form .line.submit {text-align:center;}
 
        </style>-->
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
                  <a class="navbar-brand" href="index.html">TAG Project Management Tool</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <ul class="nav navbar-nav">
                    <li class="active"><a href="AddRequirement.html">Add Requirement</a></li>
                    <li><a href="ViewRequirements.html">View Requirements</a></li>
                  </ul>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="SignUp.html">New Tenant Sign Up</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        </header>
    <h1 align="center">Add Project</h1><br>
        <div id="container">
            <form align="center">
                <div class="line"><label for="projname">Project Name: </label><input type="text"/></div>
                <div class="line"><label for="projid">Project ID: </label><input type="text"/></div>
                <div class="line"><label for="datestart">Start Date: </label><input type="text"/></div>
                <div class="line"><label for="enddate">End Date: </label><input type="text"/></div>
                <div class="line"><label for="status">Status: </label><input type="text"/></div>
                <div class="line"><label for="manager">Manager: </label><input type="text"/></div>
                <div class="line"><label for="employ">Employee(s): </label>
                </br><input type="text"/>
                </br><input type="text"/>
                </br><input type="text"/>
                </br><input type="text"/>
                </br><input type="text"/>
                </br><input type="text"/>
                </br><input type="text"/>
                </br><input type="text"/>
                </br><input type="text"/>
                </br><input type="text"/>
                </div>
                </br>
                <?php
      $myCalendar = new tc_calendar("date1", true);
      $myCalendar->setIcon("calendar/images/iconCalendar.gif");
      $myCalendar->setDate(01, 03, 1960);
      $myCalendar->setPath("calendar/");
      $myCalendar->setYearInterval(1960, 2015);
      $myCalendar->dateAllow('1960-01-01', '2015-03-01');
      $myCalendar->setSpecificDate(array("2011-04-01", "2011-04-13", "2011-04-25"), 0, 'month');
      $myCalendar->setOnChange("myChanged('test')");
      $myCalendar->writeScript();
      ?>

<script language="javascript">
<!--
function myChanged(v){
    alert("Hello, value has been changed : "+document.getElementById("date1").value+"["+v+"]");
}
//-->
</script>
                <div class="line submit"><input type="submit" value="Add Project" /></div>
            </form>
        </div>
    </body>
</html>