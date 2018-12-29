<script>

function submitForm(fm){
	
	document.getElementById("edit_form"+fm).submit();
	
}

</script>


<div class="modal fade" id="edit<?php echo $row['fair_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

<center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>

</div>

<div class="modal-body">

<?php

$edit=$mysqli->query("select * from adm_fair where fair_id=".$row['fair_id']);


$erow=$edit->fetch_assoc();

 

?>

<div class="container-fluid">

<form id="edit_form<?php echo $row['fair_id']; ?>" method="POST" action="fair/update.php"  enctype="multipart/form-data">


<input type="hidden" name="cid" id="cid" value="<?php echo $erow['fair_id']; ?>">

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

<?php if ($erow['type']=="Public") {?>

<option selected>Public</option>

<option>Private</option>

<?php }else{ ?>

<option>Public</option>

<option selected>Private</option>

<?php }?>

</select>

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

<input type="date" class="form-control" name="end_date" value="<?php echo $erow['end_date']; ?>">

</div>

</div>

<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4" align="left">

<label style="position:relative; top:7px;">image</label>

</div>

<div class="col-lg-8">

<input type="file" class="form-control" name="image"><?php echo $erow['image']; ?></input>

</div>

</div>



<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Fair Details</label>

</div>

<div class="col-lg-8">

<input type="text" class="form-control" name="fair_details" value="<?php echo $erow['fair_details']; ?>">

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
        
        <button type="button" onClick="submitForm('<?php echo $row['fair_id']; ?>')" class="btn btn-warning" ><span class="glyphicon glyphicon-check"></span> Save</button>
    
    </div>

</form>


</div>

</div>

</div>

