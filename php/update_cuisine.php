<?php
include("connection.php");

$sql = "UPDATE cuisine_table SET cuisine_type='$_POST[cuisine_name]', cuisine_description='$_POST[cuisine_description]' WHERE cuisine_id=$_POST[id];";


if (mysqli_query($con, $sql))
{
mysqli_close($con);
header('Location:../editproduct.php');
}
?>
