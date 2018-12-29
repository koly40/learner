<?php

include('../database.php');

$id=$_POST['id'];

$title=$_POST['title'];
echo $title;

$title=$_POST['title'];
$admission_type=$_POST['admission_type'];
$university_id=$_POST['university_id'];

$start_application=$_POST['start_application'];
$end_application=$_POST['end_application'];
$form_cost=$_POST['form_cost'];
$notice_link=$_POST['notice_link'];


$mysqli->query("update notice set title='$title', admission_type='$admission_type',university_id='$university_id', start_application='$start_application',end_application='$end_application', form_cost='$form_cost',notice_link='$notice_link'  where id=".$id);




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
header('location:http://localhost/admin/index.php?page=notice');

?>