<?php
include("connection.php");
session_start();

//Make sure user enter address and Login
if (!isset($_SESSION['user']))
{
  echo "<script>alert('Please login to your account to proceed.');";
  echo "window.location.href='../login.html';</script>";
}
if (!isset($_SESSION['address']))
{
  echo "<script>alert('Please enter your address .');";
  echo "window.location.href='../menu.php#input_address';</script>";
}
else {

//Take in all data from item form
$itemid = mysqli_real_escape_string($con, $_POST['item_id']);
$userid = $_SESSION['user_id'];
$address = $_SESSION['address'];
$orderdate = date("Y/m/d");

//Store data into database
  $sql = "INSERT INTO order_table (user_id, item_id, order_date, order_address, status) VALUES ('$userid', '$itemid', '$orderdate', '$address', 'Delivering')";

if (!mysqli_query($con, $sql))
{
  die('Error: ' . mysqli_error($con));
}
mysqli_close($con);

echo "<script>alert('You have completed your order.');";
echo "window.location.href='../menu.php';</script>";
}

?>
