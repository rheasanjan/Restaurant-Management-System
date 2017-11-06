<?php
$con = @mysqli_connect('localhost', 'root', '', 'testdb');
if(!$con){
  echo "Error:".mysqli_connect_error();
  exit();
}

?>
