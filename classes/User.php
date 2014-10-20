<?php
	class User{
		function addNewUser($username, $email, $password, $salt){

			$connection = mysqli_connect("localhost", "root", "root", "tc");

			$sql = "INSERT INTO users (username, email, password, salt) VALUES ('$username', '$email', '$password', '$salt')";

			mysqli_query($connection, $sql);

			mysql_close();
		}
	}
?>