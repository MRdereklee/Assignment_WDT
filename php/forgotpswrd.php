<?php
//Connect to the Database (MySQL)
include("connection.php");

//Accept the input from forgotpassword form
$fp_name = mysqli_real_escape_string($con, $_POST['fp_username']);
$fp_email = mysqli_real_escape_string($con, $_POST['fp_email']);
$fp_password = mysqli_real_escape_string($con, $_POST['fp_pw']);
$fp_cpassword = mysqli_real_escape_string($con, $_POST['fp_cpw']);

//Confirming User Exists
$sql = "SELECT * FROM user_table WHERE user_name='$fp_name' AND user_email='$fp_email' AND user_role='1'";
$result = mysqli_query($con, $sql);

//if user does not exists
if (mysqli_num_rows($result)<=0)
{
  echo "<script>alert('Invalid username or email');";
  die("window.history.go(-1);</script>");
}

//If user Exists
//Making sure password and confirm password same
if ($fp_password !== $fp_cpassword)
{
  echo "<script>alert('Password and confirm password is not same');";
  die("window.history.go(-1);</script>");
}

//Update user new Password
$e_new_password = md5($fp_password);
$sql = "UPDATE user_table SET user_password = '$e_new_password' WHERE user_name = '$fp_name' AND user_email='$fp_email'";

if (mysqli_query($con, $sql))
{
  echo "<script>alert('Password Updated, Please Login.');";
  echo "window.location.href='../login.html';</script>";
}
else {
  echo "<script>alert('Failed to update to Database: ". mysqli_connect_error()."');";
  die("window.history.go(-1);</script>");
}

?>
