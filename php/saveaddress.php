<?php
include("connection.php");
session_start();

//take data
$address = $_POST['input_address'];
//check is address set
if (isset($_SESSION['address']))
{
  unset($_SESSION['address']);
  //saving the new address
  $_SESSION['address'] = $address;

}
else {
//store into session
$_SESSION['address'] = $address;
}

echo "<script>alert('Address saved');";
echo "window.location.href='../menu.php';</script>";
 ?>
