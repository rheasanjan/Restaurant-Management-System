<?php
session_start();
?>
<html>
<head>
  <title>
    Update Employee </title>
    <style>
    p.name {
      color: white;
      font-size: 20px;
      padding: 5px 5px 5px 5px;
      font-family:sans-serif;

    }

    input{
      width:40%;
      padding:10px 15px;
      margin: 2px 0;
      display: inline-block;
      border: 2px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;

    }
    input:focus{
       border: 3px solid #555;
    }

    input[type=submit] {
        width: 50%;
        background-color:red;
        color: white;
        padding: 14px 8px;
        margin: 2px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type=submit]:hover {
        background-color:#57BEEB;
    }
    input[type=reset] {
        width: 150px;
        background-color:red;
        color: white;
        padding: 14px 8px;
        margin: 4px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type=reset]:hover {
        background-color:#57BEEB;
    }
div {
  color: white;
  font-size: 20px;
  font-family: cursive;
}
    div.empl {
      padding: 150px 100px;
      width: 35%;
      height: 750px;
      float: left;

    }
    div.remaining{
      width: 75%;
      height:750px;


    }
    .button {
      width: 150px;
      background-color:red;
      color: white;
      padding: 14px 8px;
      margin: 4px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;

    }
    .button:hover {
        background-color:#57BEEB;
    }
    .new {
      width: 120px;
    background-color:#33D034;
    color: white;
    padding: 14px 8px;
    margin: 4px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;

  }
  .button:hover {
      background-color:#57BEEB;
  }
  label {
    color:white;
    font-family: cursive;
  }

    }


    </style>
  </head>
  <body background="vegetables.jpg">
    <center>
      <p style="font-size:38px; color:white;font-family:cursive"> <b> Restaurant Management System <b> </p>
      </center>

      <center><p style="font-size:28px;color:white; font-family:cursive"> <b>Update Employee Details </b> </p>
      </center>
        <?php
        include 'index.php';
          if (isset($_POST['submit'])) {
            $emp = $_POST['empid'];

            //echo $emp;
          }

          $sql = "SELECT fname,lname,phno,address,email,salary,empid FROM employee where empid = '$emp'" ;
          $result = mysqli_query($con,$sql);
          $row = mysqli_fetch_row($result);
        ?>


      <div class="empl">
    <form action=" " method="post" name="update" >


      <label> Employee ID </label> <input type="text" name="empid" placeholder="Employee ID" required> </p>
        <input type="submit" name ="submit" value="Search employee">




    </form>
    <br><br><br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
    <button id="back" class="button"> Back </button>
    <script type="text/javascript">
  document.getElementById("back").onclick = function () {
      location.href = "adminmenu.html";
  };
</script>
    </div>
<br>
<br>
<br>
<center>
  <div class="remaining">
    <center>
    <form action="process_update.php " method = "post" name="update">

        <?php
        print "<label> Employee ID</label> <br> <input type=\"text\" name=\"id\" placeholder=\"id\" value=$row[6]  > <br> <br>";

     print "<label> First name</label> <br> <input type=\"text\" name=\"Fname\" placeholder=\"Firstname\" value=$row[0]  > <br> <br>";

     print "<label> Last name </label> <br> <input type=text name=\"Lname\" placeholder=\"Lastname\" value=$row[1] > <br> <br>";
     print "<label> Phone number</label> <br> <input type=tel name=\"phone\" placeholder=\"Phone no.\" value= $row[2] > <br> <br>";


      print "<label>Address </label> <br> <input type=text name=\"City\" placeholder=\"Address\" value=$row[3] > <br><br>";
      print "<label> Email </label> <br> <input type=email name=\"email\" placeholder=\"email\" value=$row[4] ><br> <br>";
      print "<label> Salary </label> <br> <input type=text name=\"sal\" placeholder=\"Salary\" value=$row[5] > <br><br>";

?>

       <input type="submit" value="Update Details" >

       <br>
       <input type="reset" value="Reset">
     </form>

       </center>
     </p>



</form>
</div>



 </center>
 <div id=suc>
 <?php
 if(!empty($_SESSION['suc']))
 {
   echo '<script language="javascript">';
   echo 'alert("Update Successful.")';

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
   echo 'alert("Cannot be updated")';
   echo '</script>';

 }
 ?>
 </div>
 <?php unset($_SESSION['msg']);
 ?>
 <div id=msg>
 <?php
 if(!empty($_SESSION['emp']))
 {
   echo '<script language="javascript">';
   echo 'alert("Employee does not exist")';
   echo '</script>';

 }
 ?>
 </div>
 <?php unset($_SESSION['emp']);
 ?>

</body>
</html>
