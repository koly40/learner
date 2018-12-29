<?php
$conn = new mysqli("localhost", "root", "", "adm_pro");
	
	$title = $_POST['title'];
	$des = $_POST['des'];
	
	if(isset($_POST['uploadfilesub'])) 
	{
     $filename = $_FILES['uploadfile']['name'];
     $filetmpname = $_FILES['uploadfile']['tmp_name'];
     $folder = 'upload/';
	 
     move_uploaded_file($filetmpname, $folder.$filename);
     $result = $conn->query("INSERT INTO college_feature set title='$title',description= '$des',image='$filename'");
		$qry = mysqli_query($conn, $result);
    if( $qry)
	{
      echo "image uploaded";
    }
   }
?>