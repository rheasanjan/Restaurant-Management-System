<?php
require('index.php');
// If the values are posted, insert them into the database.
   if (isset($_POST['Fname']) && isset($_POST['Lname']) && isset($_POST['phone']) && isset($_POST['password']) && isset($_POST['Address1'])
   && isset($_POST['City']) && isset($_POST['email'])){
       $Fname = $_POST['Fname'];
       $Lname = $_POST['Lname'];
       $phone = $_POST['phone'];
       $password = $_POST['password'];
       $Address1 = $_POST['Address1'];
       $City = $_POST['City'];
       $email = $_POST['email'];

       $query = "INSERT INTO 'customer' (cust_phno, fname, lname, address, city, email, password) VALUES ('$phone', '$Fname', '$Lname', '$Address1', '$City', '$email', '$password')";
       $result = mysqli_query($connection, $query);
       if($result){
           $smsg = "User Created Successfully.";
       }else{
           $fmsg ="User Registration Failed";
       }
   }
 ?>
