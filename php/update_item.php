<?php
include("connection.php");

$sql = "UPDATE item_table SET item_name='$_POST[item_name]', item_description='$_POST[item_description]', item_price = '$_POST[item_price]', cuisine_id = '$_POST[item_cuisine]' WHERE item_id= $_POST[id];";


if (mysqli_query($con, $sql))
{
mysqli_close($con);
header('Location:../editproduct.php');
}
?>
