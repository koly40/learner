<?php

include('../database.php');

$id=$_POST['id'];

$department=$_POST['department'];
echo $department;

$department=$_POST['department'];
$seat=$_POST['seat'];
$total_cost=$_POST['total_cost'];
$duration=$_POST['duration'];


$mysqli->query("update social_science_faculty set department='$department', seat='$seat', total_cost='$total_cost',duration='$duration'  where id=".$id);




// Set a constant
/*
define ("FILEREPOSITORY","profile_images/");

// Make sure that the file was POSTed.

if (is_uploaded_file($_FILES['pimage']['tmp_name']))

{

// Was the file a JPEG?

if ($_FILES['pimage']['type'] != "image/jpeg") {

echo "<p>Profile image must be uploaded in JPEG format.</p>";

} else {

 

//$name = $_FILES['classnotes']['name'];

$filename=$id.".jpg";

 

unlink(FILEREPOSITORY.$filename);

$result = move_uploaded_file($_FILES['pimage']['tmp_name'],FILEREPOSITORY.$filename);

//$result = move_uploaded_file($_FILES['pimg']['tmp_name'],"http://localhost/php_crud/profile_images/28.jpg");

if ($result == 1) echo "<p>File successfully uploaded.</p>";

else echo "<p>There was a problem uploading the file.</p>";

}

}
*/
header('location:http://localhost/admin/index.php?page=social_science_faculty');

?>