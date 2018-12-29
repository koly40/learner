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

$edit=$mysqli->query("select * from uni_details where id=".$row['id']);


$erow=$edit->fetch_assoc();

 

?>

<div class="container-fluid">

<form id="edit_form<?php echo $row['id']; ?>" method="POST" action="uni_details/update.php"  enctype="multipart/form-data">


<input type="hidden" name="cid" id="cid" value="<?php echo $erow['id']; ?>">



<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">University Id:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="university_id" value="<?php echo $erow['university_id']; ?>">
</div>
</div>






<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Department:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="department" value="<?php echo $erow['department']; ?>">
</div>
</div>





<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Total Semister:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="total_semister" value="<?php echo $erow['total_semister']; ?>">
</div>
</div>





<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Duration:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="duration" value="<?php echo $erow['duration']; ?>">
</div>
</div>



<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">University Name:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="university_name" value="<?php echo $erow['university_name']; ?>">
</div>
</div>



<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Division:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="division" value="<?php echo $erow['division']; ?>">
</div>
</div>




<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Academic Cost:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="academic_cost" value="<?php echo $erow['academic_cost']; ?>">
</div>
</div>



<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Eligibility:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="eligibility" value="<?php echo $erow['eligibility']; ?>">
</div>
</div>


<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Website Link:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="website_link" value="<?php echo $erow['website_link']; ?>">
</div>
</div>



<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Location:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="location" value="<?php echo $erow['location']; ?>">
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

