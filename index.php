<?php 
$pageTitle = "Home Page";
$status = $_GET['status'];
include("inc/header.php");
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
    <div class="jumbotron">
      <h1>Tournament Creator</h1>
      <p>Welcome! This website is mainly used for creating Fantasy Football styled leagues and tournaments for your own
        favorite sport. All you need is to create a free account and you can create your own tournament or join an exisiting one!</p>
      <p><a href="signup.php" class="btn btn-success btn-lg" role="button">Sign Up &raquo;</a></p>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
      <div class="panel panel-primary">
        <div class="panel-heading" style="text-align:center;">
          <h3 class="panel-title">How Does it Work?</h3>
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
    <div class="col-sm-6">
      <div class="panel panel-primary">
        <div class="panel-heading" style="text-align:center;">
          <h3 class="panel-title">The Perks</h3>
        </div>
        <div class="panel-body" style="height:25.2%;">
          <ul>
            <li>Choose from our pre-formatted tournament styles or customize your own.</li>
            <br>
            <li>Email all of the people registered for your tournament.</li>
            <br>
            <li>Track the top leaders using our scoreboards.</li>
            <br>
            <li>Creating a new tournament is quick and easy.</li>
          </ul>
        </div>
      </div>
  </div>
</div>
    
</body>
</html>