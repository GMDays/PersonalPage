<?php
	session_start();
	$username = $_SESSION['username'];

	if (!isset($_SESSION['is_logged_in'])) {
		header("Location:index.php");
		die();
	}

	$connection = mysql_connect("localhost", "root", "root") or die("Unable to connect");
	mysql_select_db("tc") or die( "Unable to connect to database");
?>