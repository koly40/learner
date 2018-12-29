
<!-- Add New fair -->

<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

<center><h4 class="modal-title" id="myModalLabel">Add New Fair Entry</h4></center>

</div>

<div class="modal-body">

<div class="container-fluid">

<form method="POST" id="add_form" action="fair/insert.php" class="form-horizontal" enctype="multipart/form-data" >


<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Name</label>

</div>

<div class="col-lg-8">

<textarea class="form-control" name="name"></textarea>

</div>

</div>


<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Type</label>

</div>

<div class="col-lg-8">

<textarea class="form-control" name="type"></textarea>

</div>

</div>



<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Start Date:</label>

</div>

<div class="col-lg-8">

<input type="date" class="form-control" name="start_date">

</div>

</div>

<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">End Date:</label>

</div>

<div class="col-lg-8">

<input type="date" class="form-control" name="end_date">

</div>

</div>



<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">images</label>

</div>
<div class="col-lg-8">

<input type="file"  name="image" />

</div>

</div>


<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Fair Details</label>

</div>

<div class="col-lg-8">

<textarea class="form-control" name="fair_details"></textarea>

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

