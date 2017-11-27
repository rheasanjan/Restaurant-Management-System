<?php
require('index.php');
session_start();
//if(isset($_POST['table-strength']) && isset($_POST['time-slot'])){
$strength = $_POST['table_strength'];
$timeslot = $_POST['time_slot'];
$cust_phno = $_SESSION['phone'];
$sql = "create trigger alertMsg before update on tables for each row SELECT * FROM TABLES WHERE  strength = '$strength' AND timeslot = '$timeslot' AND cust_phno is NULL";
$stmt = $con->prepare( "UPDATE tables SET cust_phno = ? WHERE strength = ? AND timeslot = ? AND cust_phno is NULL");
$stmt->bind_param("sis", $cust_phno, $strength, $timeslot );
$sql = "SELECT * FROM TABLES WHERE  strength = '$strength' AND timeslot = '$timeslot' AND cust_phno is NULL";
$result = $con->query($sql);
if ($result->num_rows == 0 ) {
  $_SESSION['errMsg'] = "SET";
  header("location:book_table.php");



  }
 else {



  $stmt->execute();





  $_SESSION['msg'] = "SET";
header("location:book_table.php");
}

$stmt->close();
//}
 ?>
