<?php
include("connection.php") ;

//intval - Get the integer value of a variable
$id = intval($_GET['id']);
$result = mysqli_query($con,"DELETE FROM item_table WHERE item_id=$id");

//Close database connection
mysqli_close($con);
header('Location: ../editproduct.php');
?>
