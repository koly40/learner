<?php

include('../database.php');

$id=$_GET['id'];

$mysqli->query("delete from uni_basic where id=$id");

unlink("profile_images/".$id.".jpg");

header('location:http://localhost/adm_admin/index.php?page=uni_basic');

?>