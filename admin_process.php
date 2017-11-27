<?php
session_start();
include 'index.php';
$username = mysqli_real_escape_string($con,$_POST['username']);
$password =mysqli_real_escape_string($con,$_POST['password']);
if($username == 'admin' && $password =='root') {
  header("location: adminmenu.html");
//  echo '<script language="javascript">';
//  echo 'alert("access denied")';
//  echo '</script>';
}
else {
  $_SESSION['errMsg'] = "Invalid username or password";
   header("location: adminlogin1.php");
 }
?>
