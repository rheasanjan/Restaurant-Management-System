<?php
include 'index.php';
session_start();
$stmt = $con->prepare("UPDATE employee set fname = (?), lname = (?) , phno= (?) ,address = (?) ,email =(?), salary = (?) where empid= (?)");
$stmt->bind_param("sssssii", $fname,$lname,$phno,$addr,$email,$sal,$emp);

$fname = $_POST['Fname'];
$lname = $_POST['Lname'];
$phno = $_POST['phone'];
$addr  =$_POST['City'];
 $emp = $_POST['id'];
 $sal = $_POST['sal'];
 $email = $_POST['email'];

 if(!$stmt-> execute())
 {
   $_SESSION['msg'] = "set";
   echo $stmt->error();
 }
 else {
   $_SESSION['suc'] ="set";
   header("location:update_emp.php");
 }
 $stmt->close();
 ?>
