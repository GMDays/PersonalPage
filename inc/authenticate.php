<?php
  session_start();
  $_SESSION['username'] = $_POST['username'];

  if($_SERVER['REQUEST_METHOD'] == "POST") {
    mysql_connect("localhost", "root", "root") or die("Unable to connect");
    mysql_select_db("tc") or die( "Unable to connect to database");
    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);

    $result = mysql_query("SELECT * FROM users WHERE username='$username' AND password=sha1('$password')");

    if(mysql_num_rows($result) > 0) {
      $_SESSION['is_logged_in'] = 1;
    }
  }

  if(!isset($_SESSION['is_logged_in'])) {
    header("location:login-failed.php");
  } 
  else {
    header("location:auth/index.php");
  }
?>