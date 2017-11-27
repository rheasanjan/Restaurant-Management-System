<?php
session_start();
?><html>
<head>
  <title> Book a table</title>
  <link rel="stylesheet" type="text/css" href="menu.css">
  <style>
  input, select {
      width: 80%;
      padding: 12px 20px;
      margin: 14px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 6px;
      box-sizing: border-box;
  }
  input[type=submit] {
      width: 80%;
      background-color: red;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
  }

  input[type=submit]:hover {
      background-color: #57BEEB;
  }
  div.form {

      border-radius: 7px;
      background-color: ;
      padding: 150px 250px 200px 200px;
    	width:550px;
    	height:250px;


  }



p.label {
  font-size: 20px;
  font-family: sans-serif;
  color: beige;
}
  </style>
</head>

<body background="table1.jpg">

  <div class="primary_nav_wrap">
  <ul>
    <li ><a href="mainhome.php">Home</a></li>
    <li ><a href="menu.php">Order Online</a></li>
    <li class="current-menu-item"><a href="book_table.html">Book a table</a> </li>


    <li><a href="first_page.html">Logout</a></li>


  </ul>
</div>
  <br>
  <br>
  <br>
  <center>
    <p style="color:beige;font-size:36px;font-family:sans-serif"> Book  A Table </p>
  </center>
  <center>
  <div class="form">


    <form action="process_booktable.php" method="post" name="no_of_people">
      <p class="label"> Enter Table Strength
      <select id="no" name="table_strength" required>

          <option value="2"> 2 </option>

              <option value="4"> 4 </option>

                  <option value="6"> 6 </option>

                      <option value="8"> 8 </option>

                          <option value="10"> 10 </option>

              </select> </p>
              <br>
              <br>
              <p class="label"> Enter the time slot for today
              <select required id="time_slot" name="time_slot" >
                  <option value="lunch1"> Lunch- 1pm </option>
                    <option value="lunch2">Lunch- 2pm </option>
                      <option value="lunch3"> Lunch-3pm </option>
                        <option value="dinner1"> Dinner-7pm </option>
                        <option value="dinner2"> Dinner-8pm </option>
                        <option value="dinner3"> Dinner-9pm </option>
                      </select> </p>
                      <br>
                      <br>

                <input type="submit"  Value="Book">
              </form>


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
              <div id="errMsg">
                      <?php

                      if(!empty($_SESSION['errMsg'])) {
                        echo '<script language="javascript">';
                        echo 'alert("The table for the selected timeslot is unavailable.Please select a different table or a different time slot")';
                        echo '</script>';

                        echo '</script>';
                      }


                       ?>
                  </div>
                  <?php unset($_SESSION['errMsg']);
                  ?>

        </body>
        </html>
