
<!-- Add New employee -->

<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

<center><h4 class="modal-title" id="myModalLabel">Add New Result</h4></center>

</div>

<div class="modal-body">

<div class="container-fluid">

<form method="POST" id="add_form" action="result/insert.php" class="form-horizontal" enctype="multipart/form-data" >

<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Title:</label>

</div>

<div class="col-lg-8">

<input type="text" class="form-control" name="title">

</div>

</div>

<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Admission Type:</label>

</div>

<div class="col-lg-8">

<select name="admission_type">

<option>Undergraduate</option>

<option>Graduate</option>

<option>Post Graduate</option>

<option>MPhil </option>

<option>PhD</option>



</select>

</div>

</div>



<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">University Id:</label>
</div>
<div class="col-lg-8">
<textarea class="form-control" name="university_id"></textarea>
</div>
</div>






<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Result Publish Date:</label>
</div>
<div class="col-lg-8">
<input type="date" class="form-control" name="result_publish_date">
</div>
</div>







<div style="height:10px;"></div>


<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Notice Link:</label>

</div>

<div class="col-lg-8">

<input type="text" class="form-control" name="notice_link">

</div>

</div>





<div style="height:10px;"></div>








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

