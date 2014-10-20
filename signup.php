<?php
$pageTitle = "Sign Up";
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
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 component">
					<form class="form-horizontal" method="post" action="auth/add-user.php" role"form" target="_self">
						<div class="form-group">
			  				<h1 class="form-signin-heading text-muted">TC Sign Up Form</h1>
			  				<h2>
			  					<span class="col-sm-12 label label-info">Username</span>
			  				</h2>
			  					<input type="text" name="username" class="form-control" required="" autofocus="">
			  				<h2>
			  					<span class="col-sm-12 label label-info">Email</span>
			  				</h2>
			  					<input type="text" name="email" class="form-control" required="">
			  				<h2>
			  					<span class="col-sm-12 label label-info">Password</span>
			  				</h2>
			  					<input type="password" name="password" class="form-control" required="">
			  				<h2>
			  					<span class="col-sm-12 label label-info">Password Confirm</span>
			  				</h2>
			  				<input type="password" name="passworConfirm" class="form-control" required="">
			  				<br>
			  				<br>
			  				<button class="btn btn-lg btn-primary btn-block" type="submit">Submit &raquo;</button>
			  			</div>
		  			</form>
		  		</div>
	  		</div>
		</div>
	</body>
</html>
