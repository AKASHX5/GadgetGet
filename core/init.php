<?php
$db=mysqli_connect('localhost', 'root' ,'','GadgetGet');
if(mysqli_connect_errno()){
  echo 'database connection failed with the following error:' . mysqli_connect_error();
  die();
}
?>
