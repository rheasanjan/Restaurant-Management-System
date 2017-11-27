<?php
$con = @mysqli_connect('localhost', 'root', '', 'restaurant');
if(!$con){
  echo "Error:".mysqli_connect_error();
  exit();
}


?>
