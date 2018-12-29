<?php

include('../database.php');

$id=$_GET['id'];

$mysqli->query("delete from student_form where id=$id");

unlink("profile_images/".$id.".jpg");

header('location:http://localhost/admin/index.php?page=studentpage');

?>