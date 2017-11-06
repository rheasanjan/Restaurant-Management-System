<?php

   session_start();
?>
<!DOCTYPE html>

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
  button.login {
      width: 60%;
      background-color:#33D034;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
  }

button.login:hover {
      background-color:#57BEEB;
  }

  div {
      border-radius: 5px;
      background-color:;
      padding: 50px;
  	width:750px;
  	height:250px;
  	font-family:aladin;
  	color:white;
  	opacity:0.9;
  }
  p.uname {
    color:  black;
    font-size: 20px;
    font-family: sans-serif;
  }
  .back {
    width: 100px;
    background-color:#33D034;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  button.reg {
    width: 100px;
    background-color: #33D034;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  button.reg :hover {
        background-color:#57BEEB;
    }


</style>

</head>


<body background="bg.jpg">
  <center>
    <p style="font-size:50px; color:black"> <b> Restaurant Management System <b> </p>
    </center>
  <br>
  <center>
    <div>
      <center>
        <p style="font-size:36px;color:black">
          <b> Customer Login </b>
        </p>
        <form action="process.php" method="POST" name="login" onsubmit="return validate()">
          <p class="uname"> PHONE NO.
          <input type="text" name="username" placeholder="username" > </p>
        <p class="uname">  PASSWORD <input type="password" name="password" placeholder="password" ></p>
          <p>
            <button type="submit" class="login" name="Login">Login </button>
            </center>
          </p>
          <center>
            <p style="color:black;font-size=25px"> Not registered?
            <button type="submit" class="reg" name="register"> Sign up </button>
          </p>
          </center>

        </form>
        <div id="errMsg">
                <?php
                if(!empty($_SESSION['errMsg'])) {
                  echo $_SESSION['errMsg'];
                 }
                 ?>
            </div>
            <?php unset($_SESSION['errMsg']);
            ?>
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
