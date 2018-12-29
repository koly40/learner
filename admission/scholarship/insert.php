<?php

include('../database.php');

$name=$_POST['name'];
$type=$_POST['type'];
$eligibility=$_POST['eligibility'];
$facility=$_POST['facility'];
$apply_procedure=$_POST['apply_procedure'];
$scholarship_for=$_POST['scholarship_for'];
$start_date=$_POST['start_date'];
$last_date=$_POST['last_date'];
$link=$_POST['link'];

$result=$mysqli->query("insert into scholarship (name, type, eligibility,facility, apply_procedure,scholarship_for,start_date,last_date,link) values ('$name','$type','$eligibility','$facility','$apply_procedure','$scholarship_for','$start_date','$last_date','$link')");

if(!$result) echo "error";

$res = $mysqli->query("select id from scholarship order by id desc");

$row = $res->fetch_row();

$_COOKIE['page']='scholar';
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
header('location:http://localhost/adm_admin/index.php?page=scholar');

 

?>