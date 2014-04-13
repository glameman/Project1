<!DOCTYPE HTML> 
<html>
<head>
   <title>Sample Form</title>
      <link href="styles/main.css" rel="stylesheet"/>

      <!-- Latest compiled and minified CSS -->
      <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->

      <!--simple sidebar css-->
      <link href="css/simple-sidebar.css" rel="stylesheet">
</head>
<body> 

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   $name = test_input($_POST["name"]);
   $email = test_input($_POST["email"]);
   $website = test_input($_POST["website"]);
   $comment = test_input($_POST["comment"]);
   $gender = test_input($_POST["gender"]);
   $type = test_input($_POST['type']);
}

function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Name: <input type="text" name="name">
   <br><br>
   E-mail: <input type="text" name="email">
   <br><br>
   Website: <input type="text" name="website">
   <br><br>
   Comment: <textarea name="comment" rows="5" cols="40"></textarea>
   <br><br>
   Gender:
   <input type="radio" name="gender" value="female">Female
   <input type="radio" name="gender" value="male">Male
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
   <br><br><br>
   <label>Type: </label>
   <select class="form-control" name="type">
     <option>Manager</option>
     <option>Worker</option>
   </select>


</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
echo $type;
?>
   <script src="js/bootstrap.min.js"></script>
</body>
</html>