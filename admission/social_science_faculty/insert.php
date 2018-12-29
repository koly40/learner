<?php

include('../database.php');

$id=$_POST['id'];
$department=$_POST['department'];
$seat=$_POST['seat'];
$total_cost=$_POST['total_cost'];
$duration=$_POST['duration'];


$result=$mysqli->query("insert into social_science_faculty (id, department, seat,total_cost, duration) values ('$id','$department','$seat','$total_cost','$duration')");

if(!$result) echo "error";

$res = $mysqli->query("select id from social_science_faculty order by id desc");

$row = $res->fetch_row();

$_COOKIE['page']='social_science_faculty';
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
header('location:http://localhost/admin/index.php?page=social_science_faculty');

 

?>