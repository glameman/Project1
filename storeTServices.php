<?php
	
	ob_start();

	session_start();

	$host = "localhost";
	$username = "root";
	$password = "pass";
	$database =  "my_db";
	$table = "services";

	$TViewProj = isset($_POST['TViewProj']) ? 1 : 0;
	$TViewReq = isset($_POST['TViewReq']) ? 1 : 0;
	$TAddUsers = isset($_POST['TAddUsers']) ? 1 : 0;
	$MAddProj = isset($_POST['MAddProj']) ? 1 : 0;
	$MChangePStatus = isset($_POST['MChangePStatus']) ? 1 : 0;
	$MViewProj = isset($_POST['MViewProj']) ? 1 : 0;
	$MViewPReq = isset($_POST['MViewPReq']) ? 1 : 0;
	$WViewReq = isset($_POST['WViewReq']) ? 1 : 0;
	$WChangeRStatus = isset($_POST['WChangeRStatus']) ? 1 : 0;

	$TID = $_SESSION['TID'];

	echo "TViewProj: " . $TViewProj . "<br>";
	echo "TViewReq: " . $TViewReq . "<br>";
	echo "TAddUsers: " . $TAddUsers . "<br>";
	echo "MAddProj: " . $MAddProj . "<br>";
	echo "MChangePStatus: " . $MChangePStatus . "<br>";
	echo "MViewProj: " . $MViewProj . "<br>";
	echo "MViewPReq: " . $MViewPReq . "<br>";
	echo "WViewReq: " . $WViewReq . "<br>";
	echo "WChangeRStatus: " . $WChangeRStatus . "<br>";

	$_SESSION['TViewProj'] = $TViewProj;
	$_SESSION['TViewReq'] = $TViewReq;
	$_SESSION['TAddUsers'] = $TAddUsers;
	$_SESSION['MAddProj'] = $MAddProj;
	$_SESSION['MChangePStatus'] = $MChangePStatus;
	$_SESSION['MViewProj'] = $MViewProj;
	$_SESSION['MViewPReq'] = $MViewPReq;
	$_SESSION['WViewReq'] = $WViewReq;
	$_SESSION['WChangeRStatus'] = $WChangeRStatus;

	
	$conn = mysql_connect("localhost", "root", "pass") or die(mysql_error());

	mysql_select_db("$database");

	mysql_query("INSERT INTO $table(TID, TViewProj, TViewReq, TAddUsers, MAddProj, MChangePStatus, MViewProj, MViewPReq, WViewReq, WChangeRStatus) 
				 VALUES ('$TID', '$TViewProj', '$TViewReq', '$TAddUsers', '$MAddProj', '$MChangePStatus', '$MViewProj', '$MViewPReq', '$WViewReq', '$WChangeRStatus')") or die(mysql_error());

	mysql_close($conn);

	echo "DONE";
	header("Location: addusers.php");
	die();

?>