<?php 
	$titlePage = 'Log Out';
	session_start();
	session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type"></meta>
	<title> USSC - <?php echo $pageTitle ?> </title>
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet"></link>
  	<link href="css/index-style.css" type="text/css" rel="stylesheet"></link>
	<link href="css/bootstrap-theme.css" type="text/css" rel="stylesheet"></link>  
	<script>
		function redirect(){
			window.location ="index.php";
		}
	</script>
</head>
<body>
	<div id="container">
		<div id="content">
			<div class="header">
				<div class="bs-docs-header">
					<h1>Tournament Creator</h1>
					<h2>You have successfully logged out.</h2>
					<br>
					<a class="btn btn-default" href="index.php">Return Home</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
