
<!-- Add New employee -->

<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

<center><h4 class="modal-title" id="myModalLabel">Add New Department</h4></center>

</div>

<div class="modal-body">

<div class="container-fluid">

<form method="POST" id="add_form" action="social_science_faculty/insert.php" class="form-horizontal" enctype="multipart/form-data" >

<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Department:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="department">
</div>
</div>




<div style="height:10px;"></div>

<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Seat:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="seat">
</div>
</div>





<div style="height:10px;"></div>

<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Total Cost:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="total_cost">
</div>
</div>



<div style="height:10px;"></div>

<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Duration:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="duration">
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

