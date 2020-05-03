<?php
include("connection.php");

//Register php function
//Retrieve data from textbox in register.html
$username = mysqli_real_escape_string ($con, $_POST['u_name']);
$email = mysqli_real_escape_string ($con, $_POST['u_email']);
$pnumber = mysqli_real_escape_string ($con, $_POST['u_pnumber']);
$password = mysqli_real_escape_string ($con, $_POST['u_password']);
$cpassword = mysqli_real_escape_string ($con, $_POST['u_cpassword']);

//Check is account register
$result_email = mysqli_query($con, "SELECT * FROM user_table WHERE user_email = '$email'");
$result_username = mysqli_query($con, "SELECT * FROM user_table WHERE user_name = '$username'");

if (mysqli_num_rows($result_email) > 0 ){
  echo "<script>alert('Email is registerd');";
	die("window.history.go(-1);</script>");
}
if (mysqli_num_rows($result_username) > 0) {
  echo "<script>alert('usernmae is taken');";
	die("window.history.go(-1);</script>");
}

//Check is confirm password and password same
if ($password !== $cpassword)
{
  echo "<script>alert('Password and confirm password are not the same.');";
	die("window.history.go(-1);</script>");
}

$md5_password = md5($password);

//Record data into database
$sql = "INSERT INTO user_table (user_name, user_email, user_pnumber, user_password, user_role) VALUES ('$username', '$email', '$pnumber', '$md5_password', '1')";

if (!mysqli_query($con, $sql))
{
  die('Error: ' . mysqli_error($con));
}
mysqli_close($con);

echo "<script>alert('Registration succesful.');";
echo "window.location.href='../login.html';</script>";
?>
