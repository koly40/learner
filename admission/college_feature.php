<?php
   $conn = new mysqli('localhost','root','','adm_pro');
   $cn = $_GET['name'];
    if ($cn==1) $name = "Dhaka college";
    if ($cn==2) $name = "Titumir College";
    if ($cn==3) $name = "Bangla college";
    if ($cn==4) $name = "Eden College";
    if ($cn==5) $name = "Dhaka commerce college";

   $sql = "SELECT * FROM college_feature where title='$name'";
   
   $result = $conn->query($sql); 
   
   while($row = mysqli_fetch_array($result)) { 
		 echo "<div id='img_div'>";
		 echo "<img src = 'upload/".$row['image']."'>";
	     echo "<p>".$row['title']."</p>";
	     echo "<p>".$row['description']."</p>";
				
		 echo "</div>";
				 
	}
				
			
?>
