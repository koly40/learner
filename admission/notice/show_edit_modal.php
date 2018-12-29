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

$edit=$mysqli->query("select * from notice where id=".$row['id']);


$erow=$edit->fetch_assoc();

 

?>

<div class="container-fluid">

<form id="edit_form<?php echo $row['id']; ?>" method="POST" action="notice/update.php"  enctype="multipart/form-data">


<input type="hidden" name="cid" id="cid" value="<?php echo $erow['id']; ?>">

<div class="row">

<div class="col-lg-4" align="left">

<label style="position:relative; top:7px;">Title:</label>

</div>

<div class="col-lg-8">

<input type="text" name="title" class="form-control" value="<?php echo $erow['title']; ?>">

</div>

</div>

<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4" align="left">

<label style="position:relative; top:7px;">Admission Type:</label>

</div>

<div class="col-lg-8" align="left">

<select name="admission_type">

<?php if ($erow['admission_type']=="Undergraduate") {?>

<option selected>Undergraduate</option>

<option>Graduate</option>
<option>Post Graduate</option>

<?php }else{ ?>

<option>Undergraduate</option>

<option selected>Graduate</option>
<option>Post Graduate</option>







<?php }?>

</select>

</div>

</div>

<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">University Id:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="start_application" value="<?php echo $erow['university_id']; ?>">
</div>
</div>





<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Start Application:</label>
</div>
<div class="col-lg-8">
<input type="date" class="form-control" name="start_application" value="<?php echo $erow['start_application']; ?>">
</div>
</div>



<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">End Application:</label>
</div>
<div class="col-lg-8">
<input type="date" class="form-control" name="end_application" value="<?php echo $erow['end_application']; ?>">
</div>
</div>



<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Form Cost:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="form_cost" value="<?php echo $erow['form_cost']; ?>">
</div>
</div>



<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Notice Link:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="notice_link" value="<?php echo $erow['notice_link']; ?>">
</div>
</div>





<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Copy Detail Link:</label>

</div>

<div class="col-lg-8">

<input type="text" class="form-control" name="link" value="<?php echo $erow['link']; ?>">

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

