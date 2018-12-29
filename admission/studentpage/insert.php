<?php

include('../database.php');

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$date_of_birth=$_POST['date_of_birth'];
$gender=$_POST['gender'];
$preferred_email=$_POST['preferred_email'];
$confirm_email=$_POST['confirm_email'];
$password=$_POST['password'];
$phone_number=$_POST['phone_number'];
$update=$_POST['update'];


$result=$mysqli->query("insert into student_form (first_name, last_name, date_of_birth,gender, preferred_email,confirm_email,password,phone_number,update) values ('$first_name','$last_name','$date_of_birth','$gender','$preferred_email','$confirm_email','$password','$phone_number',
'$update')");

if(!$result) echo "error";

$res = $mysqli->query("select id from student_form order by id desc");

$row = $res->fetch_row();

$_COOKIE['page']='studentpage';
/*
$id = $row[0];

// Set a constant

//define ("FILEREPOSITORY","profile_images/");

// Make sure that the file was POSTed.
/*
if (is_uploaded_file($_FILES['pimage']['tmp_name']))

{

// Was the file a JPEG?

if ($_FILES['pimage']['type'] != "image/jpeg") {

echo "<p>Profile image must be uploaded in JPEG format.</p>";

} else {

 

//$name = $_FILES['classnotes']['name'];

$filename=$id.".jpg";

 

$result = move_uploaded_file($_FILES['pimage']['tmp_name'],FILEREPOSITORY.$filename);

//$result = move_uploaded_file($_FILES['pimg']['tmp_name'],"http://localhost/php_crud/profile_images/28.jpg");

if ($result == 1) echo "<p>File successfully uploaded.</p>";

else echo "<p>There was a problem uploading the file.</p>";

}

}
*/
header('location:http://localhost/admin/index.php?page=studentpage');

 

?>