<?php 
$titlePage = "Create Tournament";
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
		<link href="inc/override.css" type="text/css" rel="stylesheet"></link>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
	</head>
	<body>
	<script>
		$('.list-group-item').on('hover', function(e)){
			$(this).toggleClass('active');
		};
	</script>
		<div class="container">
			<div class= "row">
				<div class ="col-sm-6">
			<!--	    <div class="dropdown">
				  		<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
				    	Dropdown
				    	<span class="caret"></span>
				  		</button>
				  		<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
						    <li role="presentation" class="divider"></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
				  		</ul> -->
				  		<div class="panel panel-primary">
					      <div class="panel-heading" style="text-align:center;">
					        <h3 class="panel-title">Step 1: Choose a type of Tournament</h3>
					      </div>
					      <div class ="row">
					      <div class="panel-body">
						     <div class= "col-sm-6">
						      	<div style="width:100%; margin-left:50%;">
						          <button class="list-group-item-primary active" style="text-align:center; width:100%;">Group Stage</button>
						          <button class="list-group-item active" style="text-align:center; width:100%;">Knockout/Playoffs</button>
						          <button class="list-group-item active" style="text-align:center; width:100%;">Round Robin</button>
						          <button class="list-group-item active" style="text-align:center; width:100%;">Custom</button>
					     	 	</div>
					     	 </div>
					       </div>
					       </div>
					 	</div>
				</div>
			</div>
				    	  	
			<div class="row">
				<div class ="col-sm-6">
					<div class="panel panel-success">
					    <div class="panel-heading" style="text-align:center;">
					        <h3 class="panel-title">Step 2: Add the Participants</h3>
					    </div>
					    <div class ="row">
					     	<div class="panel-body">
						     	<div class= "col-sm-6" style="width:100%; margin-left:50%;">
						     		<div class="radio">
						     		<button class="btn btn-lg btn-primary">
							          <input type="radio" name="optionSize" id="optionS1" value="optionSize">Choose a predetermined size</button>
							      	</button>
							          <input type="radio" name="optionPlayers" id="option2" value="optionPlayers">Choose number of players</button>
							          <input type="radio" name="optionCustom" id="option3" value="optionCustom">Custom Size</button>
					     	 		</div>
						      	</div>
				    		</div>
				    	</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class ="col-sm-6">
					<div class="panel panel-danger">
					    <div class="panel-heading" style="text-align:center;">
					        <h3 class="panel-title">Step 3: Choose the size of the tournament</h3>
					    </div>
					    <div class ="row">
					     	<div class="panel-body">
						     	<div class= "col-sm-6">
							        <div style="width:100%; margin-left:50%;">
							          <button class="list-group-item-danger active" style="text-align:center; width:100%;">Choose a predetermined size</button>
							          <button class="list-group-item-danger active" style="text-align:center; width:100%;">Choose from number of players signed up</button>
							          <button class="list-group-item-danger active" style="text-align:center; width:100%;">Custom Size</button>
							        </div>
						      	</div>
				    		</div>
				    	</div>
					</div>
				</div>
			</div>

		</div>
</body>
</html>
