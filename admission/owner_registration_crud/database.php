<?php
//Create database connection
$mysqli = mysqli_connect("localhost","root","","adm_pro");
if (!$mysqli) {
die("Connection error: " . mysqli_connect_error());
} 
?>
