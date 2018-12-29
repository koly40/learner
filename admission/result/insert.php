<?php

include('../database.php');

$title=$_POST['title'];
$admission_type=$_POST['admission_type'];
$university_id=$_POST['university_id'];
$result_publish_date=$_POST['result_publish_date'];
$notice_link=$_POST['notice_link'];


$result=$mysqli->query("insert into result (title, admission_type,university_id, result_publish_date,notice_link) values ('$title','$admission_type','$university_id','$result_publish_date','$notice_link')");

if(!$result) echo "error";

$res = $mysqli->query("select id from result order by id desc");

$row = $res->fetch_row();

$_COOKIE['page']='result';
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
header('location:http://localhost/admin/index.php?page=notice');

 

?>