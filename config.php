<?php 

$server="sql309.epizy.com";
$username="epiz_28865320";
$password="ym20irvznjrg";
$db="epiz_28865320_bank1";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  
}

else
die("connection_successfully " .mysqli_connect_error());


?>
