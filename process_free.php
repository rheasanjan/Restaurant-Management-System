<?php
include 'index.php';
$empid = $_POST['empid'];
$status = "available";
$stmt = $con->prepare("UPDATE employee SET status=? where empid=?");
$stmt->bind_param("si",$status,$empid);
$stmt->execute();
header("location:manage_orders.php");
$stmt->close();
?>
