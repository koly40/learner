<?php

include('../database.php');

$id=$_POST['cid'];

$name=$_POST['uni_name'];

$establistment_date=$_POST['edate'];

$total_depart=$_POST['total_depart'];

$type=$_POST['type'];

$location=$_POST['location'];

$division=$_POST['division'];
$vc_name=$_POST['vc_name'];
$total_seat=$_POST['total_seat'];

echo $id."<br/>".$name."<br/>"."<br/>".$establistment_date."<br/>".$total_depart."<br/>".$type."<br/>".$location."<br/>".$division."<br/>".$vc_name."<br/>".$total_seat;

echo "sds";


$mysqli->query("update uni_basic set uni_name='$name', establistment_date='$establistment_date', total_depart=$total_depart,type='$type', location='$location',division='$division' ,vc_name='$vc_name',total_seat=$total_seat where id=".$id);

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
//header('location:http://localhost/admin/index.php?page=university');

?>