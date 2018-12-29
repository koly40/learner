<?php

include('../database.php');

$id=$_POST['cid'];

$name=$_POST['name'];
$type=$_POST['type'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];
$image=$_POST['image'];
$fair_details=$_POST['fair_details'];
$link=$_POST['link'];

/*
$mysqli->query("update adm_fair set name='$name', type='$type', start_date='$start_date', end_date='$end_date', image='$image',fair_details='$fair_details' ,link='$link' where fair_id=".$id);
*/

$mysqli->query("update adm_fair set name='$name', type='$type',start_date='$start_date',end_date='$end_date',image='$image',fair_details='$fair_details',link='$link'
where fair_id=".$id);


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
header('location:http://localhost/admin/index.php?page=fair');

?>