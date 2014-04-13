<?php

ob_start();

session_start();

session_destroy();

echo "You have been logged out. Redirecting to login page...";

header( "refresh:2;url=index.php" );

?>