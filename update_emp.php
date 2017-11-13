<html>
<head>
  <title>
    Update Employee </title>
    <style>
    p.name {
      color: beige;
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
        background-color:#33D034;
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
        background-color:#33D034;
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

        padding: 10px 100px 0 100px;;
    	width:90%;
    	height:750px;
    	font-family:aladin;
    	color:white;
    	opacity:0.9;
    }
    div.emp {
      width: 25%;
      height: 750px;
      float: left;
    }
    div.remaining{
      width: 500px;
      height:750px;

    }
    .button {
      width: 150px;
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

    }
    p.eid{
      float:left;
      color: beige;
      font-size: 20px;
      padding: 5px 5px 5px 5px;
      font-family:sans-serif;
    }

    </style>
  </head>
  <body background="vegetables.jpg">
    <div>
      <center><p style="font-size:40px;color:beige"> <b>Update Employee Details </b> </p>


      <div class="emp">
        <form action = "update_emp.php" method = "post" name = "getempdetails">
      <p class="eid"><b> Employee ID </b> <input type="text" name="empid" placeholder="Employee ID" required>
        <button class="new" id = "getdetails" type = "submit"> Get Employee Details </button>
      </form>
      </div>
      <div class="remaining">
          <form action="update_emp.php" method="post" name="update" >
    <p class="name"> <b> First name&nbsp&nbsp&nbsp&nbsp &nbsp</b><input type="text" name="Fname" placeholder="first name" required value = "<?=$fname?>"></p>

     <p class="name"><b>Last name&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp</b><input type="text" name="Lname" placeholder="Last name" required value = "<?=$lname?>"></p>
     <p class="name"><b>Phone number</b><input type="tel" name="phone" placeholder="Phone no." required value = "<?=$phno?>"></p>

     <p class="name"><b>Date of birth &nbsp&nbsp&nbsp</b><input type="date" name="dob" placeholder="dd/mm/yyyy" required value = "<?=$dob?>"></p>
     <p class="name"><b>Address &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b><input type="text" name="address" placeholder="address" required value = "<?=$address?>"></p>
     <p class="name"><b>Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </b> <input type="email" name="email" placeholder="email" required value = "<?=$email?>"></p>
     <p class="name"><b> Salary &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b><input type="text" name="sal" placeholder="Salary" required value = "<?=$salary?>"></p>



       <input type="submit" value="Update Details" >
       <br>
       <input type="reset" value="Reset">
       <button id="back" class="button"> Back </button>
       <script type="text/javascript">
     document.getElementById("back").onclick = function () {
         location.href = "adminmenu.html";
     };
     
 </script>
       </center>
     </p>



</div>
     </form>
   </div>
 </center>
</body>
</html>
