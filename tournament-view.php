<?php
$pageTitle = "Tournament Page";
$status = $_GET['status'];
include('inc/header.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type"></meta>
		<title> TC - <?php echo $pageTitle ?> </title>
		<link href="css/bootstrap.css" type="text/css" rel="stylesheet"></link>
	  	<link href="css/index-style.css" type="text/css" rel="stylesheet"></link>
		<link href="css/bootstrap-theme.css" type="text/css" rel="stylesheet"></link>  
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="panel panel-primary">
				      <div class="panel-heading" style="text-align:center;">
				        <h3 class="panel-title">Create a Tournament</h3>
				      </div>
				      <div class="panel-body">
				        <ul class="list-group">
				          <li class="list-group-item"> After you sign up</li>
				          <li class="list-group-item">You can choose from one of our own pre-defined formats or create your own unique one.</li>
				          <li class="list-group-item">People will join your tournament and you can track their points and results easily.</li>
				          <li class="list-group-item">It's completely free!</li>
				        </ul>
				        <p><a href="create-tournament.php" class="btn btn-primary btn-lg" role="button">Create Tournament &raquo;</a>
				      </div>
		    		</div>
		    	</div>
		    	<div class="col-sm-5">
		    		<div class="panel panel-primary">
				      <div class="panel-heading" style="text-align:center;">
				        <h3 class="panel-title">Join a Tournament</h3>
				      </div>
				      <div class="panel-body">
				        <ul>
				          <li>After you sign up, you have the ability to create and manage your own tournaments.</li>
				          <li>You can choose from one of our own pre-defined formats or create your own unique one.</li>
				          <li>People will join your tournament and you can track their points and results easily.</li>
				          <li>It's completely free!</li>
				        </ul>
				      </div>
		    		</div>
		    	</div>
			</div>
		</div>
	</body>
</html>

