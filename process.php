<?php
include 'index.php';
session_start();

$username = mysqli_real_escape_string($con,$_POST['username']);

$password =mysqli_real_escape_string($con,$_POST['password']);


$result = mysqli_query($con,"SELECT * FROM customer WHERE cust_phno='$username' and password='$password'");
if(mysqli_num_rows($result) == 0) {
  $_SESSION['errMsg'] = "Invalid username or password";
  header("location:login_cust.php");


}
else

$_SESSION['phone'] = $_POST['username'];

header("location: mainhome.php");


?>
