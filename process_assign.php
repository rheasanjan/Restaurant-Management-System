<?php
include 'index.php';
session_start();
$empid = $_POST['empid'];
if(isset($_POST['phoneno'])){
$custphno = $_POST['phoneno'];
}
/*if(isset($custphno)){
    echo $custphno;
  } */

$sql = "SELECT count(*),sum(total_price) from orders  where cust_phno='$custphno' group by cust_phno";

$result = $con->query($sql);
//echo mysqli_error($con);


$sql1 = $con->query("SELECT status from employee where empid='$empid'");
$stat =  $sql1->fetch_assoc();
//echo $stat['status'];

$stmt = $con->prepare("INSERT into delivers values (?,?,?,?)");
$stmt-> bind_param("ssii", $custphno ,$empid,$items,$bill);
$stmt1 = $con->prepare("UPDATE employee SET status='busy' where empid=(?)");
$stmt1->bind_param("s",$empid);
while ($row = $result->fetch_row()) {

  $items = $row[0];
  $bill = $row[1];
  /*echo "custphone=".$custphno;
  echo "items = ".$items;
  echo "bill = " .$bill;*/
  if($stat['status'] == "available"){

  $stmt->execute();
  //echo  $stmt->error();


    $stmt->close();
    $stmt1->execute();
    //echo  $stmt1->error();

    $stmt1->close();

    header("location:manage_orders.php");
    $_SESSION['suc'] = "set";
  }
  else {
    $_SESSION['msg'] = "set";
    header("location:manage_orders.php");

  }



}
 ?>
