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

$edit=$mysqli->query("select * from social_science_faculty where id=".$row['id']);


$erow=$edit->fetch_assoc();

 

?>

<div class="container-fluid">

<form id="edit_form<?php echo $row['id']; ?>" method="POST" action="social_science_faculty/update.php"  enctype="multipart/form-data">


<input type="hidden" name="cid" id="cid" value="<?php echo $erow['id']; ?>">

<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">Department:</label>
</div>
<div class="col-lg-8">
<input type="text" name="department" class="form-control" value="<?php echo $erow['department']; ?>">
</div>
</div>


<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Seat:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="seat" value="<?php echo $erow['seat']; ?>">
</div>
</div>




<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Total Cost:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="total_cost" value="<?php echo $erow['total_cost']; ?>">
</div>
</div>



<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Duration:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="duration" value="<?php echo $erow['duration']; ?>">
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

