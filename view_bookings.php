<html>
<head>
  <title> View Bookings </title>
<style>
#view {
  width:90%;
  height:75%;
  color : red;

}
body {
   background-size: 100% 100%;
}
table,th,td {
  border: 1px solid black;
  border-collapse:  collapse;
}
table {
  border-radius: 5px;
}
th {
  height: 70px;
  text-align: center;
  background-color: #80bfff;
  color: black;
}
td {
  text-align: center;
  height: 35px;
  color: white;
}
th,td{
  padding: 2px 2px 2px 2px;
  border-bottom: 1px solid #ddd;
}
tr:nth-child(even)
 {
   background-color: grey;
 }
 .button {
   color: white;
   background-color: #33D034;
   border: 2px solid #ccc;
   border-radius: 6px;
   padding: 6px ;
   width: 100px;
   font-family: sans-serif;
   font-size: 20px;
   cursor: pointer;
 }
.button:hover {
  background-color: red;
}
</style>
</head>
<body background="view_bookingjpg.jpg">
  <center>
    <?php
    include 'index.php';
    $sql = "SELECT  t.tableid, t.strength, t.timeslot, t.cust_phno , c.fname, c.lname  FROM tables t,customer c WHERE t.cust_phno = c.cust_phno";
    $result = mysqli_query($con,$sql);
    ?>
    <p style="color:beige;font-family:sans-serif;font-size:34px"> <b> Restaurant Management System </b> </p>
  <p style="color:red;font-family:sans-serif; font-size:25px"> <b> View Table Bookings</b> </p>
  <div id="view">
    <table style="width:90%">
      <thead>
      <tr>
        <th> Table ID </th>
        <th> Table Strength </th>
        <th> Time Slot </th>
        <th> Customer Phone Number</th>
        <th> Customer Name </th>
      </tr>
    </thead>
    <tbody>
      <?php
      while( $array = mysqli_fetch_assoc($result)) {

        print "<tr> <td>";
        echo $array["tableid"];
        print "</td> <td>";
      echo $array["strength"];
      print "</td> <td>";
      echo $array["timeslot"];

      print "</td> <td>";
      echo $array["cust_phno"];
      print "</td> <td>";
      echo $array["fname"];
      print "&nbsp";
      echo $array["lname"];


      print "</td> </tr>";


          }
        ?>



    </tbody>
  </table>



  </div>

  <button  class="button" id="back"> Back </button>
  <script type="text/javascript">
document.getElementById("back").onclick = function () {
    location.href = "adminmenu.html";
};
</script>
</center>
</body>
</html>
