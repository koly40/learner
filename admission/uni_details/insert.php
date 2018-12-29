<?php

include('../database.php');

$uni_id=$_POST['uni_id'];
$department=$_POST['department'];
$duration=$_POST['duration'];

$university_name=$_POST['university_name'];
$division=$_POST['division'];
$academic_cost=$_POST['academic_cost'];
$eligibility=$_POST['eligibility'];
$website_link=$_POST['website_link'];
$location=$_POST['location'];



$result=$mysqli->query("insert into uni_details (uni_id, department,duration, university_name,division, academic_cost,eligibility,website_link,location) values 
('$uni_id','$department','$duration','$university_name','$division','$academic_cost','$eligibility','$website_link',
'$location')");

if(!$result) echo "error";

$res = $mysqli->query("select id from uni_details order by id desc");
   
$row = $res->fetch_row();

$_COOKIE['page']='uni_details';
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
header('location:http://localhost/admin/index.php?page=uni_details');

 

?>