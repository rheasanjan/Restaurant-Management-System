<?php
session_start();
?><html>
<head>
  <title>
    Sign up </title>
    <script>
function validateForm() {
    var x = document.forms["signup"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}
</script>
    <style>
    p.name {
      color: white;
      font-size: 20px;
      padding: 5px 5px 5px 5px;
      font-family:cursive;

    }
    body {
      background-size: 100% 100%;
    }
    input{
      width:50%;
      padding:12px 20px;
      margin: 4px 0;
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
    	height:750px;
    	font-family:aladin;
    	color:white;

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
    </style>
  </head>
  <body background="bgsignup.jpg">

    <center>
      <p style="font-size:36px;font-family:cursive;color:white"> Restaurant Management System </p>
    </center>
    <center>

      <div>

        <center><p style="font-size:40px;color:white;font-family:cursive"> <b>Sign Up </b> </p>

          <form action="register_process.php" method="post" name="signup" onsubmit="return validateForm();">


           <p class="name"> <b> First name &nbsp&nbsp&nbsp&nbsp </b> <input type="text" name="Fname" placeholder="first name" required> </p>

            <p class="name"><b>Last name&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp</b><input type="text" name="Lname" placeholder="Last name" required></p>
            <p class="name"><b>Phone number</b><input type="text" name="phone" placeholder="Phone no." required></p>
            <p class="name"><b>Password&nbsp&nbsp&nbsp &nbsp</b><input type="password" name="password" placeholder="password" required></p>
            <p class="name"><b>Address &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b><input type="text" name="Address1" placeholder="House number,Street name" required></p>
            <p class="name"><b>City&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b><input type="text" name="City" placeholder="City" required></p>
            <p class="name"><b>Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </b> <input type="text" name="email" placeholder="email" required></p>

            <p style="font-size:20px;color:yellow">
              All fields are mandatory.
              <br>

              <input type="submit" value="SIGN UP" >
              </center>
            </p>




            </form>
            <button id="back" class="button"> Back </button>
            <script type="text/javascript">
          document.getElementById("back").onclick = function () {
              location.href = "login_cust.php";
          };
          </script>
          </div>
        </center>
        <div id="msg" class="msgg">
          <?php

          if(!empty($_SESSION['msg'])) {
            echo '<script language="javascript">';
            echo 'alert("Sucessful")';
            echo '</script>';
          }


           ?>
      </div>
            <?php unset($_SESSION['msg']);
            ?>
            <div id="errmsg" class="msgg">
              <?php

              if(!empty($_SESSION['errmsg'])) {
                echo '<script language="javascript">';
                echo 'alert("Unsuccessful. Try again")';
                echo '</script>';
              }


               ?>
          </div>
                <?php unset($_SESSION['errmsg']);
                ?>

      </body>
      </html>
