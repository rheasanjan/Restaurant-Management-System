<?php
session_start();
include 'index.php';



$stmt = $con->prepare("INSERT INTO employee values(?,?,?,?,?,?,?,?,?)");
$stmt-> bind_param("issssssis",$id,$fname,$lname,$phone,$dob,$addr,$email,$sal,$status);

$id = mysqli_real_escape_string($con,$_POST['empid']);
$fname= mysqli_real_escape_string($con,$_POST['Fname']);
$lname=mysqli_real_escape_string($con,$_POST['Lname']);
$phone=mysqli_real_escape_string($con,$_POST['phone']);
$dob=mysqli_real_escape_string($con,$_POST['dob']);
$addr =mysqli_real_escape_string($con,$_POST['address']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$sal = mysqli_real_escape_string($con,$_POST['sal']);
$status="available";
if($stmt->execute()) {
  $_SESSION['Msg'] = "set";
  header("location:addemp.php");
}
else {
  $_SESSION['errMsg'] = "set";
  header("location:addemp.php");
}


$stmt->close();
$con->close();

 ?>
