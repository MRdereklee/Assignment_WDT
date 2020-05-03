<?php
$con = mysqli_connect("localhost", "root", "", "orderingwebsitedb");

if (mysqli_connect_error())
{
  echo "Failed to connect to Database: ". mysqli_connect_error();
}
?>
