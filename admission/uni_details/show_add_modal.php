
<!-- Add New employee -->

<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

<center><h4 class="modal-title" id="myModalLabel">Add University Details</h4></center>

</div>

<div class="modal-body">

<div class="container-fluid">

<form method="POST" id="add_form" action="uni_details/insert.php" class="form-horizontal" enctype="multipart/form-data" >

<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">UNiversity Id:</label>

</div>





<div class="col-lg-8">

<input type="text" class="form-control" name="uni_id">

</div>

</div>



<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Department:</label>
</div>
<div class="col-lg-8">
<textarea class="form-control" name="department"></textarea>
</div>
</div>



<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Total Semister:</label>
</div>
<div class="col-lg-8">
<textarea class="form-control" name="total_semister"></textarea>
</div>
</div>



<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Duration:</label>
</div>
<div class="col-lg-8">
<textarea class="form-control" name="duration"></textarea>
</div>
</div>







<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">University Name:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="university_name">
</div>
</div>









<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Division:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="division">
</div>
</div>







<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Academic Cost:</label>

</div>

<div class="col-lg-8">

<textarea class="form-control" name="academic_cost"></textarea>

</div>

</div>




<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Eligibility:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="eligibility">
</div>
</div>







<div style="height:10px;"></div>


<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Website Link:</label>

</div>

<div class="col-lg-8">

<input type="text" class="form-control" name="website_link">

</div>

</div>





<div style="height:10px;"></div>






<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Location:</label>

</div>

<div class="col-lg-8">

<input type="text" class="form-control" name="location">

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

