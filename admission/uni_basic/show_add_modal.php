
<!-- Add New employee -->

<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

<center><h4 class="modal-title" id="myModalLabel">Add uni basic</h4></center>

</div>

<div class="modal-body">

<div class="container-fluid">

<form method="POST" id="add_form" action="scholarship/insert.php" class="form-horizontal" enctype="multipart/form-data" >

<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Uni Name:</label>

</div>
<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Establistment date:</label>

</div>




<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Total depart:</label>

</div>

<div class="col-lg-8">

<textarea class="form-control" name="eligibility"></textarea>

</div>

</div>

<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Type:</label>

</div>

<div class="col-lg-8">

<textarea class="form-control" name="facility"></textarea>

</div>

</div>

<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Location:</label>

</div>

<div class="col-lg-8">

<textarea class="form-control" name="apply_procedure"></textarea>

</div>

</div>

<div style="height:10px;"></div>


<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Division:</label>

</div>

<div class="col-lg-8">

<input type="text" class="form-control" name="scholarship_for">

</div>

</div>

<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">VC Name:</label>

</div>

<div class="col-lg-8">

<input type="date" class="form-control" name="start_date">

</div>

</div>

<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Total seat:</label>
</div>

<div class="col-lg-8">

<input type="date" class="form-control" name="last_date">

</div>

</div>

<div style="height:10px;"></div>


<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Copy Detail Link:</label>

</div>

<div class="col-lg-8">

<input type="text" class="form-control" name="link">

</div>

</div>

</div>

</div>

<div class="modal-footer">

<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

<button type="button" onclick="form_submit(1)" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>

</form>

</div>

</div>

</div>

</div>

