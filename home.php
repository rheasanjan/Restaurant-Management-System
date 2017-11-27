<html>
<head>
  <title>  Home page </title>
  <style>

  #menu {
    width: 500px;
    height: 500px;
    padding: 250px 50px 50px 50px;
  }

  .button {
    float: right;
    background-color: #33d034;
    padding:8px;
    border: 2px solid #ccc;
    border-radius: 4px;
    cursor: pointer;
    width: 100px;
    color: white;
    font-style: normal;
    font-family: sans-serif;
    font-size: 20px;
  }
  .button:hover {
      background-color: #57BEEB;
      box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    }
  .menubutton {
    width: 60%;
    background-color: #33D034;
    padding: 8px;
    margin: 6px;
    display: inline-block;;
    border: 2px solid #ccc;
    border-radius: 4px;
    cursor: pointer;
    color: white;
    font-style: normal;
    font-family: sans-serif;
    font-size: 20px;

  }


.menubutton:hover {
    background-color: #57BEEB;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
  }

  </style>
</head>
<body background="adminbg.jpg">
  <center>
    <p style="color:black;font-size:36px;font-family:sans-serif"> <b> Restaurant Management System </b> </p>
  </center>
<button id="logout" class="button"> Logout </button>
<script type="text/javascript">
document.getElementById("logout").onclick = function () {
  location.href = "login_cust.php";
};
</script>

  <center>
    <div id="menu">

      <button  id = "orderonline" class="menubutton"> Order Online</button>
      <script type="text/javascript">
    document.getElementById("orderonline").onclick = function () {
        location.href = "menu.html";
    };
</script>
      <br>
      <button id="booktable" class="menubutton"> Book a table </button>
      <script type="text/javascript">
    document.getElementById("booktable").onclick = function () {
        location.href = "book_table.html";
      };
        </script>
      <br>


    </div>

  </center>

</body>
</html>
