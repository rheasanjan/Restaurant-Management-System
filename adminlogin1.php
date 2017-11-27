<?php
session_start();

?>
<html>
<head>
  <script>
  function validate() {
    un = document.forms["login"]["username"].value;
    ps=document.forms["login"]["password"].value;

    if(un == "" || ps==""){
       alert("Username or password cannot be empty");
       return false;
   }

  }
  </script>
  <title> Login page </title>
  <style>
  body {
    background-size : 100% 100%;
  }
  input[type=text], select {
      width: 50%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 2px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
  }
     input[type=text]:focus{
  	    border: 3px solid #555;
  }
  input[type=password], select {
      width: 50%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 2px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;

  }
  input[type=password]:focus {
      border: 3px solid #555;
  }
  input[type=submit] {
      width: 60%;
      background-color:red;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
  }

  input[type=submit]:hover {
      background-color:#57BEEB;
  }

  div {
      border-radius: 5px;
      background-color:;
      padding: 50px;
  	width:750px;
  	height:250px;
  	font-family:sans-serif;;
  	color:white;

  }
  p.uname {
    color:  black;
    font-size: 24px;
    font-family: cursive;
  }
  .back {
    width: 100px;
    background-color:red;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;

  }
  .back:hover {
      background-color:#57BEEB;

  }

</style>

</head>

<body background="bg.jpg">
  <center>
    <p style="font-size:45px; color:black; font-family:cursive"> <b> Restaurant Management System <b> </p>
    </center>
  <br>
  <center>
    <div>
      <center>
        <p style="font-size:36px;color:black;font-family: cursive">
          <b> Admin Login </b>
        </p>
        <form action="admin_process.php" method="POST" name="login" onsubmit="return validate()">
          <p class="uname"><b> Username </b>
          <input type="text" name="username" placeholder="username" required> </p>
        <p class="uname"> <b> Password </b><input type="password" name="password" placeholder="password" required></p>
          <p>
            <input type="submit" value="Login">
            </center>
          </p>


        </form>
        <div id="errMsg">
                <?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?>
            </div>
            <?php unset($_SESSION['errMsg']); ?>
      </div>
    </center>

    <div id="backbutton">
      <button  id="back" class="back"> Back </button>
      <script type="text/javascript">
      document.getElementById("back").onclick= function() {
        location.href="first_page.html";
      };
      </script>
  </body>
  </html>
