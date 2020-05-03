<?php
include("connection.php");

$target_dir = "../uploads/";
$real_dir = "uploads/";
//the basename($_FILES["photo"]["name"]) means to get the basename (e.g. test.docx) from the file path (e.g. D://images/test.docx)
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$target_file_dbstore = $real_dir . basename($_FILES["photo"]["name"]);
//to get the extension of the file (e.g. docx)
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image
$check = getimagesize($_FILES["photo"]["tmp_name"]);
if($check !== false)
{
echo "<script>alert('File is an image - " . $check["mime"] . ".');</script>";
}
else
{
echo "<script>alert('File is not an image.Please try again!');</script>";
die("<script>window.history.go(-1);</script>");
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" )
{
echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.Please try again!');</script>";
die("<script>window.history.go(-1);</script>");
}
//move the file using move_uploaded_file function.
//If not success transfer, give alert message!
if (! move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
echo "<script>alert('Unable to upload photo.Thus, data will not be inserted to database. Please try again!');</script>";
die("<script>window.history.go(-1);</script>");
}
echo "<script>alert('The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.');</script>";

//Insert into databse
$cusine_name = $_POST['p_name'];
$cusine_description = $_POST['p_description'];

//step 3: create the SQL statement (since this is insert)
$sql = "INSERT INTO cuisine_table (cuisine_type, cuisine_description, cuisine_pic) VALUES ('$cusine_name','$cusine_description','$target_file_dbstore');";
if (!mysqli_query($con,$sql))
{
	die('Error: ' . mysqli_error($con));
}
mysqli_close($con);

?>

<script type="text/javascript">
alert("successfully added a record.");
window.location.replace("../addnewproduct.php");
</script>
