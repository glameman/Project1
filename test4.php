
<?php

$host = "localhost";
$username = "root";
$password = "kobenba";
$database =  "test";
$table = "Persons";


$conn = mysql_connect("localhost", "root", "kobenba") or die(mysql_error());
echo "connected<br><br>";

mysql_select_db("$database");
echo "database found<br><br>";

// escape variables for security
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];

mysql_query("INSERT INTO $table(FirstName, LastName, Age) VALUES ('$firstname', '$lastname', '$age')") or die(mysql_error());

echo "Entered data successfully\n";
mysql_close($conn);
?>