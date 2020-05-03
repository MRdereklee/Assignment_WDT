<?php
include('connection.php');

//Retrieve data from reply form
$reply_name = mysqli_real_escape_string ($con, $_POST['name']);
$reply_email = mysqli_real_escape_string ($con, $_POST['email']);
$reply_subject = mysqli_real_escape_string ($con, $_POST['subject']);
$reply_content = mysqli_real_escape_string ($con, $_POST['message']);

//Store reply into Database
$sql = "INSERT INTO customer_reply_table (reply_name, reply_email, reply_subject, reply_content) VALUES ('$reply_name', '$reply_email', '$reply_subject', '$reply_content')";

if (!mysqli_query($con, $sql))
{
  die('Error: ' . mysqli_error($con));
}
mysqli_close($con);

  echo "<script>alert('Message sent successfully.');";
  die("window.history.go(0);</script>");
?>

?>
