<?php
include 'index.php';
session_start();



$stmt1 = $con->prepare("SELECT foodid FROM food where name=(?)"); //to get food id from food table
$stmt2 = $con->prepare("SELECT price FROM food where name=(?)"); //to select price from food table
$stmt = $con->prepare("INSERT INTO orders values(?,?,?,NULL)"); //inserting into orders table
$stmt1-> bind_param("s", $val); // name of food ordered


$stmt2-> bind_param("s",$val); // -...-




$stmt-> bind_param("ssi",$cust,$food_id,$quan);

$val = mysqli_real_escape_string($con,$_POST['item1']);
$quan = mysqli_real_escape_string($con,$_POST['quan1']);
$cust = $_SESSION["phone"];

$stmt1-> execute();
$stmt1->bind_result($food_id);
$stmt1->fetch();
$stmt1->close();

$stmt2-> execute();
$stmt2->bind_result($price);
$stmt2->fetch();
//printf("price of %s with id %s is %d \n",$val,$food_id,$price);
//$tp = $price * $quan;
$stmt2->close();

//echo $tp;



if(!$stmt->execute()) {
echo $stmt->error;
}
else {
  header("location:menu.php");
}

$stmt->close();


// 2nd item
$stmt1 = $con->prepare("SELECT foodid FROM food where name=(?)");
$stmt2 = $con->prepare("SELECT price FROM food where name=(?)");
$stmt = $con->prepare("INSERT INTO orders values(?,?,?,?)");

$stmt1-> bind_param("s", $val);


$stmt2-> bind_param("s",$val);




$stmt-> bind_param("ssii",$cust,$food_id,$quan,$tp);

$val = mysqli_real_escape_string($con,$_POST['item2']);
$quan = mysqli_real_escape_string($con,$_POST['quan2']);
$cust = $_SESSION["phone"];

  $stmt1-> execute();
  $stmt1->bind_result($food_id);
  $stmt1->fetch();
  $stmt1->close();

  $stmt2-> execute();
  $stmt2->bind_result($price);
  $stmt2->fetch();
  //printf("price of %s with id %s is %d \n",$val,$food_id,$price);

  $tp = $price * $quan;
  $stmt2->close();





  if($quan !=0) {
    $stmt->execute();

      header("location:menu.php");

    }



$stmt->close();

//item 3
$stmt1 = $con->prepare("SELECT foodid FROM food where name=(?)");
$stmt2 = $con->prepare("SELECT price FROM food where name=(?)");
$stmt = $con->prepare("INSERT INTO orders values(?,?,?,?)");

$stmt1-> bind_param("s", $val);


$stmt2-> bind_param("s",$val);




$stmt-> bind_param("ssii",$cust,$food_id,$quan,$tp);

$val = mysqli_real_escape_string($con,$_POST['item3']);
$quan = mysqli_real_escape_string($con,$_POST['quan3']);
$cust = $_SESSION["phone"];

  $stmt1-> execute();
  $stmt1->bind_result($food_id);
  $stmt1->fetch();
  $stmt1->close();

  $stmt2-> execute();
  $stmt2->bind_result($price);
  $stmt2->fetch();
  //printf("price of %s with id %s is %d \n",$val,$food_id,$price);
  //printf("quantity = %d",$quan);

  $tp = $price * $quan;
  $stmt2->close();





  if($quan !=0) {
    if(!$stmt->execute()) {
      echo $stmt->error;
    }
    else {

        header("location:menu.php");

    }
  }


//}
//$stmt1->close();
$stmt->close();

//item4
$stmt1 = $con->prepare("SELECT foodid FROM food where name=(?)");
$stmt2 = $con->prepare("SELECT price FROM food where name=(?)");
$stmt = $con->prepare("INSERT INTO orders values(?,?,?,?)");

$stmt1-> bind_param("s", $val);


$stmt2-> bind_param("s",$val);




$stmt-> bind_param("ssii",$cust,$food_id,$quan,$tp);

$val = mysqli_real_escape_string($con,$_POST['item4']);
$quan = mysqli_real_escape_string($con,$_POST['quan4']);
$cust = $_SESSION["phone"];

  $stmt1-> execute();
  $stmt1->bind_result($food_id);
  $stmt1->fetch();
  $stmt1->close();

  $stmt2-> execute();
  $stmt2->bind_result($price);
  $stmt2->fetch();
  //printf("price of %s with id %s is %d \n",$val,$food_id,$price);
  //printf("quantity = %d",$quan);

  $tp = $price * $quan;
  $stmt2->close();





  if($quan !=0) {
    if(!$stmt->execute()) {
      echo $stmt->error;
    }
    else {
      header("location:menu.php");
    }
  }


//}
//$stmt1->close();
$stmt->close();

//item 5
$stmt1 = $con->prepare("SELECT foodid FROM food where name=(?)");
$stmt2 = $con->prepare("SELECT price FROM food where name=(?)");
$stmt = $con->prepare("INSERT INTO orders values(?,?,?,?)");

$stmt1-> bind_param("s", $val);


$stmt2-> bind_param("s",$val);




$stmt-> bind_param("ssii",$cust,$food_id,$quan,$tp);

$val = mysqli_real_escape_string($con,$_POST['item5']);
$quan = mysqli_real_escape_string($con,$_POST['quan5']);
$cust = $_SESSION["phone"];

  $stmt1-> execute();
  $stmt1->bind_result($food_id);
  $stmt1->fetch();
  $stmt1->close();

  $stmt2-> execute();
  $stmt2->bind_result($price);
  $stmt2->fetch();
//  printf("price of %s with id %s is %d \n",$val,$food_id,$price);
  //printf("quantity = %d",$quan);

  $tp = $price * $quan;
  $stmt2->close();





  if($quan !=0) {
    if(!$stmt->execute()) {
      echo $stmt->error;
    }
    else {
      header("location:menu.php");
    }
  }


//}
//$stmt1->close();
$stmt->close();


$sql = "CALL random()";
if (!$mysqli->query($sql))
{
  echo "bad";
}
?>
