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

$edit=$mysqli->query("select * from scholarship where id=".$row['id']);


$erow=$edit->fetch_assoc();

 

?>

<div class="container-fluid">

<form id="edit_form<?php echo $row['id']; ?>" method="POST" action="scholarship/update.php"  enctype="multipart/form-data">


<input type="hidden" name="cid" id="cid" value="<?php echo $erow['id']; ?>">

<div class="row">

<div class="col-lg-4" align="left">

<label style="position:relative; top:7px;">Name:</label>

</div>

<div class="col-lg-8">

<input type="text" name="name" class="form-control" value="<?php echo $erow['name']; ?>">

</div>

</div>

<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4" align="left">

<label style="position:relative; top:7px;">type:</label>

</div>

<div class="col-lg-8" align="left">

<select name="type">

<?php if ($erow['type']=="Local") {?>

<option selected>Local</option>

<option>Foriegn</option>

<?php }else{ ?>

<option>Local</option>

<option selected>Foriegn</option>

<?php }?>

</select>

</div>

</div>

<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4" align="left">

<label style="position:relative; top:7px;">Eligibility:</label>

</div>

<div class="col-lg-8">

<textarea class="form-control" name="eligibility"><?php echo $erow['eligibility']; ?></textarea>

</div>

</div>

<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4" align="left">

<label style="position:relative; top:7px;">Facility:</label>

</div>

<div class="col-lg-8">

<textarea class="form-control" name="facility"><?php echo $erow['facility']; ?></textarea>

</div>

</div>

<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4" align="left">

<label style="position:relative; top:7px;">Apply Procedure:</label>

</div>

<div class="col-lg-8">

<textarea class="form-control" name="apply_procedure"><?php echo $erow['apply_procedure']; ?></textarea>

</div>

</div>

<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Scholarship For:</label>

</div>

<div class="col-lg-8">

<input type="text" class="form-control" name="scholarship_for" value="<?php echo $erow['scholarship_for']; ?>">

</div>

</div>

<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Start Date:</label>

</div>

<div class="col-lg-8">

<input type="date" class="form-control" name="start_date" value="<?php echo $erow['start_date']; ?>">

</div>

</div>

<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">End Date:</label>

</div>

<div class="col-lg-8">

<input type="date" class="form-control" name="last_date" value="<?php echo $erow['last_date']; ?>">

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

