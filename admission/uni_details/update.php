<?php

include('../database.php');

$id=$_POST['id'];

$uni_id=$_POST['uni_id'];
echo $uni_id;

$uni_id=$_POST['uni_id'];
$department=$_POST['department'];
$total_semister=$_POST['total_semister'];

$duration=$_POST['duration'];
$university_name=$_POST['university_name'];
$division=$_POST['division'];
$academic_cost=$_POST['academic_cost'];
$eligibility=$_POST['eligibility'];
$website_link=$_POST['website_link'];
$location=$_POST['location'];


$mysqli->query("update uni_details set uni_id='$uni_id', department='$department', total_semister='$total_semister',duration='$duration',university_name='$university_name', division='$division',academic_cost='$academic_cost', eligibility='$eligibility', website_link='$website_link', location='$location'  where id=".$id);




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
header('location:http://localhost/admin/index.php?page=uni_details');

?>