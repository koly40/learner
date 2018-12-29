<script>

function submitForm(fm){
	
	document.getElementById("uni_edit_form"+fm).submit();
	
}

</script>


<div class="modal fade" id="edit<?php echo $crow['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

<center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>

</div>

<div class="modal-body">

<?php

$edit=$db->query("select * from uni_basic where id=".$crow['id']);


$erow=$edit->fetch_assoc();

 

?>

<div class="container-fluid">

<form id="uni_edit_form<?php echo $crow['id']; ?>" method="POST" action="university/update.php"  enctype="multipart/form-data">


<input type="hidden" name="cid" id="cid" value="<?php echo $erow['id']; ?>">

<div class="row">

<div class="col-lg-5" align="left">

<label style="position:relative; top:7px;">Uni name:</label>

</div>

<div class="col-lg-7">

<input type="text" name="uni_name" class="form-control" value="<?php echo $erow['university_name']; ?>">

</div>

</div>

<div class="row">

<div class="col-lg-5" align="left">

<label style="position:relative; top:7px;">Establistment date:</label>

</div>

<div class="col-lg-7">

<input type="date" name="edate" class="form-control" value="<?php echo $erow['establishment_date']; ?>">

</div>

</div>
<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-5" align="left">

<label style="position:relative; top:7px;">Total depart:</label>

</div>

<div class="col-lg-7">

<input type="text" class="form-control" name="total_depart" value="<?php echo $erow['total_depart']; ?>">

</div>

</div>

<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-5" align="left">

<label style="position:relative; top:7px;">Type:</label>

</div>

<div class="col-lg-7" align="left">

<select name="type">

<?php if ($erow['type']=="public") {?>

<option selected>public</option>

<option>private</option>
<option>others</option>

<?php }else{ ?>

<option>public</option>

<option selected>private</option>
<option>others</option>







<?php }?>

</select>

</div>

</div>

<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-5" align="left">

<label style="position:relative; top:7px;">Location:</label>

</div>

<div class="col-lg-7">

<input type="text" class="form-control" name="location" value="<?php echo $erow['location']; ?>">

</div>

</div>

<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-5" align="left">

<label style="position:relative; top:7px;">Division:</label>

</div>

<div class="col-lg-7" align="left">

<select name="division">

<?php if ($erow['division']=="Dhaka") {?>

<option selected>Dhaka</option>

<option>Khulna</option>
<option>Rajsashi</option>

<?php }else{ ?>

<option>Dhaka</option>

<option selected>Khulna</option>
<option>Rajsashi</option>







<?php }?>

</select>

</div>

</div>



<div class="row">

<div class="col-lg-5">

<label class="control-label" style="position:relative; top:7px;">VC Namer:</label>

</div>

<div class="col-lg-7">

<input type="text" class="form-control" name="vc_name" value="<?php echo $erow['vc_name']; ?>">

</div>

</div>

<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-5">

<label class="control-label" style="position:relative; top:7px;">total seat:</label>

</div>

<div class="col-lg-7">

<input type="text" class="form-control" name="total_seat" value="<?php echo $erow['total_seat']; ?>">

</div>

</div>




</div>

</div>

    <div class="modal-footer">
    
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        
        <button type="submit" onClick="submitForm('<?php echo $crow['id']; ?>')" class="btn btn-warning" ><span class="glyphicon glyphicon-check"></span> Save</button>
    
    </div>

</form>


</div>

</div>

</div>

