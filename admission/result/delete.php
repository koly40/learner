<?php

include('../database.php');

$id=$_GET['id'];

$mysqli->query("delete from result where id=$id");

unlink("profile_images/".$id.".jpg");

header('location:http://localhost/admin/index.php?page=result');

?>