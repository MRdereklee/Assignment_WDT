<?php
include("connection.php") ;

//intval - Get the integer value of a variable
$id = intval($_GET['id']);
$result = mysqli_query($con,"DELETE FROM order_table WHERE order_id=$id");

//Close database connection
mysqli_close($con);
header('Location: ../myorder.php');
?>
