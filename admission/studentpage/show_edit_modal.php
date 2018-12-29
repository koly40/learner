<script>

function submitForm(fm){
	
	document.getElementById("edit_form"+fm).submit();
	
}

</script>


<div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

<center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>

</div>

<div class="modal-body">

<?php

$edit=$mysqli->query("select * from student_form where id=".$row['id']);


$erow=$edit->fetch_assoc();

 

?>

<div class="container-fluid">

<form id="edit_form<?php echo $row['id']; ?>" method="POST" action="studentpage/update.php"  enctype="multipart/form-data">


<input type="hidden" name="cid" id="cid" value="<?php echo $erow['id']; ?>">

<div class="row">

<div class="col-lg-4" align="left">

<label style="position:relative; top:7px;">First name:</label>

</div>

<div class="col-lg-8">

<input type="text" name="first_name" class="form-control" value="<?php echo $erow['first_name']; ?>">

</div>

</div>


<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Last name:</label>

</div>

<div class="col-lg-8">

<input type="text" class="form-control" name="last_name" value="<?php echo $erow['last_name']; ?>">

</div>

</div>






<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Date of birth:</label>

</div>

<div class="col-lg-8">

<input type="date" class="form-control" name="date_of_birth" value="<?php echo $erow['date_of_birth']; ?>">

</div>

</div>



<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4" align="left">

<label style="position:relative; top:7px;">Gender:</label>

</div>

<div class="col-lg-8" align="left">

<select name="admission_type">

<?php if ($erow['gender']=="male") {?>

<option selected>male</option>

<option>female</option>
<option>others</option>

<?php }else{ ?>

<option>male</option>

<option selected>female</option>
<option>others</option>







<?php }?>

</select>

</div>

</div>



<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Preferred email:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="preferred_email" value="<?php echo $erow['preferred_email']; ?>">
</div>
</div>



<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Confirm email:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="confirm_email" value="<?php echo $erow['confirm_email']; ?>">
</div>
</div>


<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Password:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="password" value="<?php echo $erow['password']; ?>">
</div>
</div>

<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Phone number:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="phone_number" value="<?php echo $erow['phone_number']; ?>">
</div>
</div>


<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Update:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="update" value="<?php echo $erow['update']; ?>">
</div>
</div>




</div>

</div>

    <div class="modal-footer">
    
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        
        <button type="button" onClick="submitForm('<?php echo $row['id']; ?>')" class="btn btn-warning" ><span class="glyphicon glyphicon-check"></span> Save</button>
    
    </div>

</form>


</div>

</div>

</div>

