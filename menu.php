<?php
session_start();
 ?>
 <html>
<head>
  <title> Food menu </title>
<link rel="stylesheet" type="text/css" href="menu.css">
  <style>
  select {
    width: 20%;
    padding: 12px 20px;
    margin: 14px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 6px;
    box-sizing: border-box;
  }

  table,th,td {
    border: 1px solid black;
    border-collapse: collapse;

  }
  table {
    border-radius: 4px;
  }
  th {
  height:  50px;
  text-align: center;
  background-color:#57BEEB;
  color:white;
  }
  th,td{
    padding: 2px 2px 2px 2px;
    border-bottom: 1px solid #ddd;
  }
  tr:nth-child(even)
   {background-color: #f2f2f2}

  p.header {
    font-size:26px;
    color: black;
    font-family: cursive;;
  }
  input{
    width: 80%;
    background-color:#ff3333;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input:hover {
    background-color: #45a049;
}


  </style>
</head>
<body background="menu.jpg">
  <center>
    <p style="color:black;font-size:36px;font-family:sans-serif"> <b> Restaurant Management System </b> </p>
  </center>

  <div class="primary_nav_wrap">
  <ul>
    <li ><a href="mainhome.php">Home</a></li>
    <li class="current-menu-item"><a href="#">Order Online</a></li>
    <li><a href="book_table.php">Book a table</a> </li>


    <li><a href="first_page.html">Logout</a></li>


  </ul>
</div>
  <br>
  <br>
  <br>
  <br>
  <center>


    <div style="overflow-x:auto;">
      <h2 style="font-size:25px;"> Menu </h2>
      <p class="header"> <b>Vegetarian Starters and Main Course </b> </p>
      <table style="width:90%">
        <tr>
          <th> Item </th>
          <th> Price </th>

        </tr>
        <tr>
          <td> Gobi Manchurian </td>
          <td> Rs. 50/- </td>

          </tr>
          <tr>
            <td> Paneer Manchurian </td>
            <td> Rs. 70/- </td>

            </tr>
            <tr>

              </tr>
              <tr>
                <td> Paneer Butter Masala </td>
                <td> Rs. 100/- </td>

                </tr>
                <tr>
                  <td> Palak Paneer </td>
                  <td> Rs. 100/- </td>

                  </tr>
                  <tr>
                    <td> Dal Fry </td>
                    <td> Rs. 60/- </td>

                    </tr>
                    <tr>
                      <td> Dal Tadka </td>
                      <td> Rs. 70/- </td>

                      </tr>


            </table>
            <p class="header"> <b> Non Vegetarian Starters and Main course </b> </p>
            <table style="width:90%">
              <tr>
                <th> Item </th>
                <th> Price </th>

              </tr>
              <tr>
                <td> Chicken Manchurian </td>
                <td> Rs. 100/- </td>

                </tr>
                <tr>
                  <td> Honey Chicken </td>
                  <td> Rs. 120/- </td>

                  </tr>
                  <tr>
                    <td> Chicken Kebab </td>
                    <td> Rs. 120/- </td>

                    </tr>
                    <tr>
                      <td> Butter Chicken Masala </td>
                      <td> Rs. 120/- </td>

                      </tr>

                          <tr>
                            <td> Chicken Biriyani </td>
                            <td> Rs. 110/- </td>
                          </tr>

                              <tr>
                                <td> Mutton Biriyani </td>
                                <td> Rs. 150/- </td>

                                </tr>


                  </table>
                  <p class="header"> <b> Desserts </b> </p>
                  <table style="width:90%">
                    <tr>
                      <th> Item </th>
                      <th> Price </th>

                    </tr>
                    <tr>
                      <td> Gulab Jamun  </td>
                      <td> Rs. 30/- </td>

                      </tr>

                        <tr>
                          <td> Fruit Salad with icecream </td>
                          <td> Rs. 70/- </td>

                          </tr>
                          <tr>
                            <td> Icecream (1 scoop) </td>
                            <td> Rs. 40/- </td>

                            </tr>
                  </table>

          </div>
          <br>
          <br>
          <br>
          <br>
          <center>


            <div style="overflow-x:auto;">
              <h2> Order </h2>
              <form name="menu" action="process_foo.php" method="post">
              <p> Select item 1  <select name="item1">
                <optgroup label="Vegetarian">  <option value="Gobi Manchurian"> Gobi Manchurian </option>
                  <option value="Paneer Manchurian">Paneer Manchurian</option>

                  <option value="Paneer Butter Masala">Paneer Butter Masala</option>
                  <option value="Palak Paneer">Palak Paneer </option>
                  <option value="Dal Fry">Dal Fry </option>
                  <option value="Dal Tadka">Dal Tadka </option>
                </optgroup>
                <optgroup label="Non Vegetarian">
                  <option value="Chicken Manchurian"> Chicken Manchurian </option>
                    <option value="Honey Chicken">Honey Chicken</option>
                    <option value="Butter Chicken Masala">Butter Chicken Masala</option>
                    <option value="Chicken Biriyani">Chicken Biriyani</option>
                    <option value="Mutton Biriyani ">Mutton Biriyani </option>
                    <option value="Chicken Kebab">Chicken Kebab </option>

                  </optgroup>
                  <optgroup label="Desserts">
                    <option value="Gulab Jamun">Gulab Jamun</option>
                    <option value="Fruit Salad with icecream">Fruit Salad with icecream </option>
                    <option value="Icecream "> Icecream </option>
                  </optgroup>
                </select>
                 Quantity
                <select name="quan1">

                  <option value="1"> 1 </option>
                  <option value="2"> 2 </option>
                  <option value="3"> 3 </option>
                  <option value="4"> 4 </option>
                  <option value="5"> 5 </option>
                </select>
              </p>
                <p> Select item 2  <select name="item2">

                  <optgroup label="Vegetarian">
                    <option value="Gobi Manchurian"> Gobi Manchurian </option>
                    <option value="Paneer Manchurian">Paneer Manchurian</option>

                    <option value="Paneer Butter Masala">Paneer Butter Masala</option>
                    <option value="Palak Paneer">Palak Paneer </option>
                    <option value="Dal Fry">Dal Fry </option>
                    <option value="Dal Tadka"> Dal Tadka</option>
                  </optgroup>
                  <optgroup label="Non Vegetarian">
                    <option value="Chicken Manchurian "> Chicken Manchurian </option>
                      <option value="Honey Chicken">Honey Chicken</option>
                      <option value="Butter Chicken Masala">Butter Chicken Masala</option>
                      <option value="Chicken Biriyani">Chicken Biriyani</option>
                      <option value="Mutton Biriyani ">Mutton Biriyani </option>
                      <option value="Chicken Kebab">Chicken Kebab </option>

                    </optgroup>
                    <optgroup label="Desserts">
                      <option value="Gulab Jamun">Gulab Jamun</option>
                      <option value="Fruit Salad with icecream">Fruit Salad with icecream </option>
                      <option value="Icecream"> Icecream </option>
                    </optgroup>
                  </select>
                  Quantity
                  <select name="quan2">
                    <option value="0"> 0 </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                    <option value="5"> 5 </option>
                  </select>
                </p>
                  <p> Select item 3  <select name="item3">
                    <optgroup label="Vegetarian">  <option value="Gobi Manchurian"> Gobi Manchurian </option>
                      <option value="Paneer Manchurian">Paneer Manchurian</option>

                      <option value="Paneer Butter Masala">Paneer Butter Masala</option>
                      <option value="Palak Paneer">Palak Paneer </option>
                      <option value="Dal Fry ">Dal Fry </option>
                      <option value="Dal Tadka">Dal Tadka </option>
                    </optgroup>
                    <optgroup label="Non Vegetarian">
                      <option value="Chicken Manchurian"> Chicken Manchurian </option>
                        <option value="Honey Chicken">Honey Chicken</option>
                        <option value="Butter Chicken Masala">Butter Chicken Masala</option>
                        <option value="Chicken Biriyani">Chicken Biriyani</option>
                        <option value="Mutton Biriyani">Mutton Biriyani </option>
                        <option value="Chicken Kebab">Chicken Kebab </option>

                        </optgroup>
                        <optgroup label="Desserts">
                          <option value="Gulab Jamun<">Gulab Jamun</option>
                          <option value="Fruit Salad with icecream">Fruit Salad with icecream </option>
                          <option value="Icecream"> Icecream </option>
                        </optgroup>
                    </select>
                     Quantity
                    <select name="quan3">
                      <option value="0"> 0 </option>
                      <option value="1"> 1 </option>
                      <option value="2"> 2 </option>
                      <option value="3"> 3 </option>
                      <option value="4"> 4 </option>
                      <option value="5"> 5 </option>
                    </select>
                  </p>
                    <p> Select item 4  <select name="item4">
                      <optgroup label="Vegetarian">  <option value="Gobi Manchurian"> Gobi Manchurian </option>
                        <option value="Paneer Manchurian">Paneer Manchurian</option>

                        <option value="Paneer Butter Masala">Paneer Butter Masala</option>
                        <option value="Palak Paneer">Palak Paneer </option>
                        <option value="Dal Fry">Dal Fry </option>
                        <option value="Dal Tadka">Dal Tadka </option>
                      </optgroup>
                      <optgroup label="Non Vegetarian">
                        <option value="Chicken Manchurian "> Chicken Manchurian </option>
                          <option value="Honey Chicken">Honey Chicken</option>
                          <option value="Butter Chicken Masala">Butter Chicken Masala</option>
                          <option value="Chicken Biriyani">Chicken Biriyani</option>

                          <option value="Mutton Biriyani">Mutton Biriyani </option>
                          <option value="Chicken Kebab">Chicken Kebab </option>

                        </optgroup>
                        <optgroup label="Desserts">
                          <option value="Gulab Jamun">Gulab Jamun</option>
                          <option value="Fruit Salad with icecream">Fruit Salad with icecream </option>
                          <option value="Icecream"> Icecream </option>
                        </optgroup>
                      </select>
                       Quantity
                      <select name="quan4">
                        <option value="0"> 0 </option>
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                        <option value="5"> 5 </option>
                      </select>
                      </p>
                      <p> Select item 5  <select name="item5">
                        <optgroup label="Vegetarian">  <option value="Gobi Manchurian"> Gobi Manchurian </option>
                          <option value="Paneer Manchurian">Paneer Manchurian</option>

                          <option value="Paneer Butter Masala">Paneer Butter Masala</option>
                          <option value="Palak Paneer">Palak Paneer </option>
                          <option value="Dal Fry">Dal Fry </option>
                          <option value="Dal Tadka">Dal Tadka </option>
                        </optgroup>
                        <optgroup label="Non Vegetarian">
                          <option value="Chicken Manchurian"> Chicken Manchurian </option>
                            <option value="Honey Chicken">Honey Chicken</option>
                            <option value="Butter Chicken Masala">Butter Chicken Masala</option>
                            <option value="Chicken Biriyani">Chicken Biriyani</option>

                            <option value="Mutton Biriyani">Mutton Biriyani </option>
                            <option value="Chicken Kebab">Chicken Kebab </option>

                          </optgroup>
                          <optgroup label="Desserts">
                            <option value="Gulab Jamun">Gulab Jamun</option>
                            <option value="Fruit Salad with icecream ">Fruit Salad with icecream </option>
                            <option value=" Icecream"> Icecream </option>
                          </optgroup>
                        </select>
                         Quantity
                        <select name="quan5">
                          <option value="0"> 0 </option>
                          <option value="1"> 1 </option>
                          <option value="2"> 2 </option>
                          <option value="3"> 3 </option>
                          <option value="4"> 4 </option>
                          <option value="5"> 5 </option>
                        </select>
                        </p>








          <input  type="submit" value="Checkout" > </input>
        </body>
        </html>
