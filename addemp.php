<?php
session_start();
?>
<html>
<head>
  <title>
    Add Employee </title>
    <style>
    p.name {
      color: white;
      font-size: 20px;
      padding: 5px 5px 5px 5px;
      font-family:cursive;

    }

    input {
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

        background-color:red;
        color: white;
        padding: 14px 8px;
        margin: 2px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;

    }
    input[type=reset]:hover {
        background-color:#57BEEB;
    }

    div {

        padding: 10px 100px 0 100px;;
    	width:90%;
    	height:750px;
    	font-family:aladin;
    	color:white;

    }
    .button {
      float : left;
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

    </style>
  </head>
  <body background="vegetables.jpg">

    <div>
        <center><p style="font-size:35px;color:white;font-family:cursive"> <b>Restaurant Management System </b> </p>
      <center><p style="font-size:28px;color:white;font-family:cursive"> <b>Add New Employee </b> </p>

    <form action="process_addemp.php" method="POST" name="addemp" >
      <p class="name"><b> Employee ID &nbsp</b> <input type="text" name="empid" placeholder="Employee ID" required>
    <p class="name"> <b> First name&nbsp&nbsp&nbsp&nbsp &nbsp</b><input type="text" name="Fname" placeholder="first name" required></p>

     <p class="name"><b>Last name&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp</b><input type="text" name="Lname" placeholder="Last name" required></p>
     <p class="name"><b>Phone number</b><input type="text" name="phone" placeholder="Phone no." required></p>

     <p class="name"><b>Date of birth &nbsp&nbsp&nbsp</b><input type="date" name="dob" placeholder="dd/mm/yyyy" required></p>
     <p class="name"><b>Address &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b><input type="text" name="address" placeholder="Address" required></p>
     <p class="name"><b>Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </b> <input type="email" name="email" placeholder="email" required></p>
     <p class="name"><b> Salary &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b><input type="text" name="sal" placeholder="Salary" required></p>




       <input type="submit" value="Add Employee" />
       <input type="reset" value="Reset"/>
      <a href="adminmenu.html"> <input type="button"   id="back" class="button" value="Back"/>   </a>



       </center>
     </p>




     </form>

   </div>

 </center>

   <div id="errMsg">
           <?php
           if(!empty($_SESSION['errMsg'])) {
             echo '<script language="javascript">';
             echo 'alert("Unsuccessful. Try Again")';
             echo '</script>';
           }
            ?>
       </div>
       <?php unset($_SESSION['errMsg']);
       ?>


 </div>
 <div id="Msg">
         <?php
         if(!empty($_SESSION['Msg'])) {
           echo '<script language="javascript">';
           echo 'alert("Successful!")';
           echo '</script>';
         }
          ?>
     </div>
     <?php unset($_SESSION['Msg']);
     ?>


</div>

</body>
</html>
