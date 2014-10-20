<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$salt = openssl_random_pseudo_bytes(32);
	$sha256pass = sha1($password);

	require_once('../classes/User.php');
	$newUser = new User;
	$newUser -> addNewUser($username, $email, $sha256pass, $salt);

	require_once('../send-email.php');
	sendEmail($email, $username, $password);

	header("Location:../index.php");
}
else{
	header("Location:manage.php");
	die();
}

?>