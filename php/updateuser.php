<?php
//Connect to the Database (MySQL)
include("connection.php");
session_start();
//Accept the input from update user form
$new_name = mysqli_real_escape_string($con, $_POST['name']);
$new_email = mysqli_real_escape_string($con, $_POST['email']);
$new_pnumber = mysqli_real_escape_string($con, $_POST['p_number']);


//Update user new information
$sql = "UPDATE user_table SET user_name = '$new_name', user_email = '$new_email', user_pnumber = '$new_pnumber' WHERE user_id = '".$_SESSION['user_id']."'";

if (mysqli_query($con, $sql))
{
  echo "<script>alert('Information Updated');";
  echo "window.location.href='../profile.php';</script>";
}
else {
  echo "<script>alert('Failed to update to Database: ". mysqli_connect_error()."');";
  die("window.history.go(-1);</script>");
}

?>
