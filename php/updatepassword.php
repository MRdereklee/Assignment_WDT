<?php
//Connect to the Database (MySQL)
include("connection.php");
session_start();

//Accept the input from update password form
$current_password = md5(mysqli_real_escape_string($con, $_POST['c_password']));
$new_password = md5(mysqli_real_escape_string($con, $_POST['n_password']));
$confirm_new_password = md5(mysqli_real_escape_string($con, $_POST['n_cpassword']));

//Check is the password same as current password
$sql = "SELECT user_password FROM user_table WHERE user_id = '".$_SESSION['user_id']."'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

if ($current_password !== $row['user_password'])
{
  echo "<script>alert('Current Password is wrong.');";
  die("window.history.go(-1);</script>");
}

//Making sure password and confirm password same
if ($new_password !== $confirm_new_password)
{
  echo "<script>alert('Password and confirm password is not same');";
  die("window.history.go(-1);</script>");
}

//Update user new Password
$sql = "UPDATE user_table SET user_password = '$new_password' WHERE user_id = '".$_SESSION['user_id']."'";
if (mysqli_query($con, $sql))
{
  echo "<script>alert('Password Updated, Please Relogin into your account.');";
  session_unset();
  session_destroy();
  echo "window.location.href='../login.html';</script>";
}
else {
  echo "<script>alert('Failed to update to Database: ". mysqli_connect_error()."');";
  die("window.history.go(-1);</script>");
}

?>
