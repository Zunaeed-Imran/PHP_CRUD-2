<?php
$conn = new mysqli('localhost','root','','mydb2');

if(isset($conn)){
  echo 'Connect Sucessfully';
}else{
  die(mysqli_error($conn));
}