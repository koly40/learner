<?php
include('database.php');
$id=$_GET['id'];
$mysqli->query("delete from owner_registraion where id=$id");
unlink("profile_images/".$id.".jpg");
header('location:index.php');
?>
