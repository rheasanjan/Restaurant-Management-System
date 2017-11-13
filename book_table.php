<?php
require('index.php');
session_start();
if(isset($_POST['table-strength']) && isset($_POST['time-slot'])){
$strength = $_POST['table_strength'];
$timeslot = $_POST['time_slot'];
$stmt = mysqli_prepare($con, "UPDATE tables SET cust_phno = ? WHERE strength = ? AND timeslot = ? AND cust_phno is NULL");
if($stmt){
  mysqli_stmt_bind_param($stmt, "sis", $cust_phno, $strength, $timeslot );
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}
else{
  echo "Failure";
}
}
 ?>
