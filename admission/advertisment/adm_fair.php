<?php
$conn = new mysqli("localhost", "root", "", "adm_pro");
	$name = $_POST['name'];
	$title = $_POST['title'];
	$std = $_POST['sd'];
	$end = $_POST['ed'];
	if(isset($_POST['uploadfilesub'])) 
	{
     $filename = $_FILES['uploadfile']['name'];
     $filetmpname = $_FILES['uploadfile']['tmp_name'];
     $folder = 'upload/';
	 
     move_uploaded_file($filetmpname, $folder.$filename);
     $result = $conn->query("INSERT INTO advertisement set title='$title', name='$name', star_date='$std', end_date='$end', image='$filename'");
		$qry = mysqli_query($conn, $result);
    if( $qry)
	{
      echo "image uploaded";
    }
   }
?>
 