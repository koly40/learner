<?php

include('../database.php');

$id=$_POST['cid'];

$name=$_POST['uni_name'];
echo $name;

$type=$_POST['establistment_date'];

$eligibility=$_POST['total_depart'];

$facility=$_POST['type'];

$apply_procedure=$_POST['location'];

$scholarship_for=$_POST['division'];
$start_date=$_POST['vc_name'];
$last_date=$_POST['total_seat'];
$link=$_POST['link'];

$mysqli->query("update uni_basic set uni_name='$uni_name', establistment_date='$establistment_date', total_depart='$total_depart',type='$type', location='$locationl',division='$division' ,vc_name='$vc_name',total_seat='$total_seat',link='$link' where id=".$id);

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
header('location:http://localhost/adm_admin/index.php?page=uni_basic');

?>