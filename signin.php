<?php
$pageTitle = "Sign In";
$status = $_GET['status'];
include('inc/header.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type"></meta>
		<title> USSC - <?php echo $pageTitle ?> </title>
		<link href="css/bootstrap.css" type="text/css" rel="stylesheet"></link>
		<link href="css/index-style.css" type="text/css" rel="stylesheet"></link>
		<link href="css/bootstrap-theme.css" type="text/css" rel="stylesheet"></link>
	</head>
	<body>
		<div class="container">
  			<form class="form-signin" method="post" action="check.php">
  				<h1 class="form-signin-heading text-muted">Tournament Creator</h1>
  				<input type="text" name="username" class="form-control" placeholder="Username" required="" autofocus="">
  				<input type="password" name="password" class="form-control" placeholder="Password" required="">	
  				<button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
  			</form>
  		</div>
	</body>
</html>


