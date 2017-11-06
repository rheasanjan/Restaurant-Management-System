<?php
include 'index.php';
session_start();

$username = mysqli_real_escape_string($con,$_POST['username']);

$password =mysqli_real_escape_string($con,$_POST['password']);


$result = mysqli_query($con,"SELECT * FROM login WHERE username='$username' and password='$password'");
if(mysqli_num_rows($result) == 0) {
  $_SESSION['errMsg'] = "Invalid username or password";
  header("location:login_cust.php");


}
else

header("location: home.php");


?>
