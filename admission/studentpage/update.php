<?php

include('../database.php');

$id=$_POST['id'];

$first_name=$_POST['first_name'];
echo $first_name;

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$date_of_birth=$_POST['date_of_birth'];
$gender=$_POST['gender'];
$preferred_email=$_POST['preferred_email'];
$confirm_email=$_POST['confirm_email'];
$password=$_POST['password'];
$phone_number=$_POST['phone_number'];
$update=$_POST['update'];


$mysqli->query("update student_form set first_name='$first_name', last_name='$last_name', date_of_birth='$date_of_birth',gender='$gender', preferred_email='$preferred_email',confirm_email='$confirm_email',password='$password',phone_number='$phone_number',
update='$update'  where id=".$id);




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
header('location:http://localhost/admin/index.php?page=studentpage');

?>