<?php
include("connection.php");

//Login into member account
//saving useraccount using session start
session_start();

//getting username and password
$log_username = mysqli_real_escape_string($con, $_POST['login_name']);
$log_password = mysqli_real_escape_string($con, $_POST['login_password']);

//search in SQLiteDatabase
$e_log_password = md5($log_password);

$sql = "SELECT * FROM user_table WHERE user_name = '$log_username' AND user_password = '$e_log_password'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result)<=0)
{
  echo "<script>alert('Wrong username or password.');";
	die("window.history.go(-1);</script>");
}

//saving user info into session
if ($row = mysqli_fetch_array($result))
{
  $_SESSION['user_id'] = $row['user_id'];
	$_SESSION['user'] = $row['user_name'];
	$_SESSION['role'] = $row['user_role'];
}

if ($_SESSION['role']==="1")
{
	echo "<script>alert('Welcome back ".$_SESSION['user']."');";
	echo "window.location.href='../menu.php';</script>";
}
else if($_SESSION['role']==="0")
{
	echo "<script>alert('Welcome back admin!');";
	echo "window.location.href='../admin.html';</script>";
}
?>
