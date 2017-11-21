<?php
session_start();
?>
<html>
<head>
  <title> Manage Orders </title>
<style>
#view {
  width:90%;
  height:75%;
  color : red;

}
body {
   background-size: 100% 100%;
}
table,th,td {
  border: 1px solid black;
  border-collapse:  collapse;
}
table {
  border-radius: 10px;
}
th {
  height: 70px;
  text-align: center;
  background-color: #80bfff;
  color: black;
}
td {
  text-align: center;
  height: 35px;
  color: white;
}
th,td{
  padding: 2px 2px 2px 2px;
  border-bottom: 1px solid #ddd;
}
tr:nth-child(even)
 {
   background-color: grey;
 }
 .button {
   color: black;
   background-color: red;
   border: 2px solid #ccc;
   border-radius: 6px;
   padding: 6px ;
   width: 150px;
   font-family: sans-serif;
   font-size: 20px;
   cursor: pointer;
 }
.button:hover {
  background-color: #80bfff;
}
</style>
</head>
<body background="view_bookingjpg.jpg">
  <center>
    <?php
    include 'index.php';
    $sql = "SELECT empid,fname,lname,status FROM employee where status='available'";
     $result = mysqli_query($con,$sql);
     ?>
     <p style="color:beige;font-family:sans-serif;font-size:34px"> <b> Restaurant Management System </b> </p>
   <p style="color:red;font-family:sans-serif; font-size:25px"> <b> View Table Bookings</b> </p>
   <div id="view">
     <p style="font-size:25px;color: beige; font-family: cursive"> Employees Available for delivery </p>
     <table style="width:80%">
       <thead>
       <tr>
         <th> Employee ID </th>
         <th> Employee Name </th>
         <th> Status </th>
       </tr>
     </thead>
     <tbody>
       <?php
       while( $row = mysqli_fetch_assoc($result)) {
       print "<tr> <td>";
       echo $row["empid"];
       print "</td><td>";
       echo $row["fname"];
       print "&nbsp";
       echo $row["lname"];
       print "</td><td>";
       echo $row["status"];
       print "</td> <tr>";
     }
     ?>
   </tbody>

 </table>
 <?php
 $sql = "SELECT o.cust_phno,c.fname,c.lname,c.address,count(*),sum(total_price) from customer c,orders o where c.cust_phno = o.cust_phno group by c.cust_phno";
 $result = mysqli_query($con, $sql);
 ?>
<br>
<br>
<br>

<p style="font-size:25px;color: black; font-family: cursive"> Assign Employees for Delivery</p>

   <table style="width:80%">
   <thead>
     <tr>

     <th> Customer name </th>
     <th> Address </th>
     <th> No. of items </th>
     <th> Total Amount </th>
     <th> Customer Phone number </th>
     <th> Employee ID </th>
     <th> Set Employee ID  </th>
   </tr>
 </thead>
 <tbody>
   <?php
   while( $row = mysqli_fetch_row($result)) {

   print "<tr> <td>";




   echo $row[1];
   print "&nbsp";
   echo $row[2];
   print "</td><td>";
   echo $row[3];
   print "</td> <td>";
   echo $row[4];
   print "</td> <td>";
   echo $row[5];
   print "</td> <td>";

   print "<form action=\"process_assign.php\" method=\"POST\" name=\"assign\">";

   print "<input type=text name=\"phoneno\" value=$row[0] readonly=\"readonly\">";
    print "</td><td>";

  print "<input type=text name=\"empid\" id =\"empid\" placeholder= EmpID required>";
   print "</td><td>";
   print "<input type=submit value=\"Assign\" >";
   print "</form>";

   print "</td></tr>";


}
?>


 </tbody>
 </table>
<br>
<br>
<?php

$sql = "SELECT empid,fname,lname,status FROM employee where status='busy'";
 $result = mysqli_query($con,$sql);
 ?>
 <p style="font-size:25px;color: beige; font-family: cursive"> Employees Assigned For Delivery </p>
<table style="width:80%">
  <thead>
  <tr>
    <th> Employee ID </th>
    <th> Employee Name </th>
    <th> Status </th>
    <th> </th>
  </tr>
</thead>
<tbody>
  <?php
  while( $row = mysqli_fetch_row($result)) {
  print "<tr> <td>";
  print "<form action=\"process_free.php\" method=\"POST\" name=\"assign\">";
  print "<input type=text name=\"empid\" value=$row[0] readonly=\"readonly\">";
   print "</td><td>";
  //echo $row["empid"];
  //print "</td><td>";
  echo $row[1];
  print "&nbsp";
  echo $row[2];
  print "</td><td>";
  echo $row[3];
  print "</td> <td>";

  print "<input type=submit value=\"Free\" >";
  print "</form>";

  print "</td></tr>";
}
?>
</tbody>

</table>
<br>

<button class=button id="back"> Back </button>
<script type="text/javascript">
document.getElementById("back").onclick = function () {
  location.href = "adminmenu.html";
};
</script>
 </div>
</center>
<div id=suc>
<?php
if(!empty($_SESSION['suc']))
{
  echo '<script language="javascript">';
  echo 'alert("Selected employee is assigned to deliver the order.")';

  echo '</script>';


}
?>
</div>
<?php unset($_SESSION['suc']);
?>
<div id=msg>
<?php
if(!empty($_SESSION['msg']))
{
  echo '<script language="javascript">';
  echo 'alert("The selected employee is unavailable at the moment")';
  echo '</script>';

}
?>
</div>
<?php unset($_SESSION['msg']);
?>
<br>
<br>

</body>
</html>
