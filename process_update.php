<?php
require('index.php');
$empid = null;
if(isset($_POST['empid'])){
  global $empid;
  $empid = $_POST['empid'];
}
$fname = null;
$lname = null;
$phno = null;
$dob = null;
$address = null;
$email = null;
$salary = null;
$result = mysqli_query($con, "SELECT * FROM employee WHERE empid = '$empid'");
if(!$result){
  printf("Error: %s\n", mysqli_error($con));
   exit();
}
while($row = mysqli_fetch_array($result)){
  global $fname, $lname, $phno, $dob, $address, $email, $salary;
  $fname = $row['fname'];
  $lname = $row['lname'];
  $phno = $row['phno'];
  $dob = $row['dob'];
  $address = $row['address'];
  $email = $row['email'];
  $salary = $row['salary'];
}



$sql = "UPDATE employee SET fname = ?, lname = ?, phno = ?, dob = ?, address = ?, email = ?, salary = ? WHERE empid = ?";
$stmt = $db_usag->prepare($sql);

$stmt->bind_param('ssssssds', $fname, $lname, $phno, $dob, $address, $email, $salary, $empid);
$fname = $_POST['Fname'] ?: '';
$lname = $_POST['Lname'] ?: '';
$phno = $_POST['phone'] ?: '';
$dob = $_POST['dob'] ?: '';
$address = $_POST['address'] ?: '';
$email = $_POST['email'] ?: '';
$salary = $_POST['sal'] ?: '';

$stmt->execute();
if ($stmt->errno) {
  echo "FAILURE!".$stmt->error;
}




?>
