<html>
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
      color: #ffdb4d;
      font-size: 20px;
      padding: 5px 5px 5px 5px;
      font-family:sans-serif;

    }
    input[type=text],select{
      width:50%;
      padding:12px 20px;
      margin: 4px 0;
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
        margin: 4px 0;
        display: inline-block;
        border: 2px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;

    }
    input[type=password]:focus {
        border: 3px solid #555;
    }
    input[type=submit] {
        width: 50%;
        background-color:#33D034;
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
    	opacity:0.8;
    }
    </style>
  </head>
  <body background="bgsignup.jpg">
    <center>
      <h1> </h1>
    </center>
    <center>
    <br>
      <div>
        <center><p style="font-size:40px"> <b>Sign Up </b> </p>

          <form action="" method="get" name="signup" onsubmit="return validateForm();">
            <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>

           <p class="name"> <b> First name&nbsp&nbsp&nbsp &nbsp</b><input type="text" name="Fname" placeholder="first name" required></p>

            <p class="name"><b>Last name&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp</b><input type="text" name="Lname" placeholder="Last name" required></p>
            <p class="name"><b>Phone number</b><input type="text" name="phone" placeholder="Phone no." required></p>
            <p class="name"><b>Password&nbsp&nbsp&nbsp &nbsp</b><input type="password" name="password" placeholder="password" required></p>
            <p class="name"><b>Address &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b><input type="text" name="Address1" placeholder="House number,Street name" required></p>
            <p class="name"><b>City&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b><input type="text" name="City" placeholder="City" required></p>
            <p class="name"><b>Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </b> <input type="text" name="email" placeholder="email" required></p>

            <p style="font-size:20px; color:beige">
              All fields are mandatory.
              <br>

              <input type="submit" value="SIGN UP" >
              </center>
            </p>




            </form>
          </div>
        </center>
      </body>
      </html>
