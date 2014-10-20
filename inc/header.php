<?php 
	session_start();
	$pageTitle = "Header";
	$status = $_GET['status'];
	$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type"></meta>
	<title> USSC - <?php echo $pageTitle ?> </title>
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet"></link>
	<link href="css/index-style.css" type="text/css" rel="stylesheet"></link>
	<link href="css/bootstrap-theme.css" type="text/css" rel="stylesheet"></link>
	<link href="inc/override.css" type="text/css" rel="stylesheet"></link>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.js"></script>
</head>
<body>
	<div id="fullscreen_bg" class="fullscreen_bg" style="overflow-y:scroll;"/>
		<div class="navbar navbar-inverse" role="navigation" style="width:100%;">
	      <div class="container-fluid">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="index.php">Tournament Creator</a>
	        </div>
	        <div class="navbar-collapse collapse">
	          <ul class="nav navbar-nav">
	            <li><a href="index.php">Home</a></li>
	            <li><a href="tournament-view.php">Tournaments</a></li>
	            <li><a href="leaderboard.php">Leaderboards</a></li>
	            <li class="dropdown">
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Options <span class="caret"></span></a>
	              <ul class="dropdown-menu" role="menu">
	                <li><a href="#">Action</a></li>
	                <li><a href="#">Another action</a></li>
	                <li><a href="#">Something else here</a></li>
	                <li class="divider"></li>
	                <li class="dropdown-header">Nav header</li>
	                <li><a href="#">Separated link</a></li>
	                <li><a href="#">One more separated link</a></li>
	              </ul>
	            </li>
	        </ul>
	        <ul class="pull-right">
	            <li>
		            <?php
		            if($status=='failed'){
		            	echo('<div class="alert alert-danger" role="alert">Your username or password is incorrect.</div>&nbsp&nbsp&nbsp<a href="../personalpage/signin.php" class="btn btn-primary pull-right" role ="button">Sign In</a></p>');
		            }
		            elseif($status=='success') {
		            	echo '<div class="alert alert-success" role="alert">You have successfully logged in as ' . $username . '</div>&nbsp&nbsp&nbsp<a href="../personalpage/logout.php" class="btn btn-primary" style="">Sign Out</a>';
		            }
		            else{
		            	echo('<a href="../personalpage/signin.php" class="btn btn-primary pull-right" role ="button">Sign In</a>');
		            }
		            ?>
	        	</li>
	        </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </div>
  </body>
</html>