<?php

include('../database.php');
$fair_id=$_POST['fair_id'];
$name=$_POST['name'];
$type=$_POST['type'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];
$image=$_POST['image'];
$fair_details=$_POST['fair_details'];
$link=$_POST['link'];
$un = "admin";


$result=$mysqli->query("insert into adm_fair(fair_id,name,type,start_date,end_date,image,fair_details,username) values ('$fair_id','$name','$type','$start_date','$end_date','$image','$fair_details','$un')");

if(!$result) echo "error";

$res = $mysqli->query("select fair_id from adm_fair order by fair_id desc");

$row = $res->fetch_row();

$_COOKIE['page']='fair';

$id = $row[0];

// Set a constant

define ("FILEREPOSITORY","fair_images/");

// Make sure that the file was POSTed.

if (is_uploaded_file($_FILES['image']['tmp_name']))

{

// Was the file a JPEG?

if ($_FILES['image']['type'] != "image/jpeg") {

echo "<p>Profile image must be uploaded in JPEG format.</p>";

} else {

 

//$name = $_FILES['classnotes']['name'];

$filename=$id.".jpg";

 

$result = move_uploaded_file($_FILES['image']['tmp_name'],FILEREPOSITORY.$filename);

//$result = move_uploaded_file($_FILES['pimg']['tmp_name'],"http://localhost/php_crud/profile_images/28.jpg");
/*
if ($result == 1) echo "<p>File successfully uploaded.</p>";

else echo "<p>There was a problem uploading the file.</p>";
*/
}

}

header('location:http://localhost/admin/index.php?page=fair');

 

?>