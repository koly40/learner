
<!-- Add New employee -->

<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

<center><h4 class="modal-title" id="myModalLabel">Add student information</h4></center>

</div>

<div class="modal-body">

<div class="container-fluid">

<form method="POST" id="add_form" action="studentpage/insert.php" class="form-horizontal" enctype="multipart/form-data" >

<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">First name:</label>

</div>

<div class="col-lg-8">

<input type="text" class="form-control" name="first_name">

</div>

</div>

<div style="height:10px;"></div>


<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Last name:</label>

</div>

<div class="col-lg-8">

<input type="text" class="form-control" name="last_name">

</div>

</div>


<div style="height:10px;"></div>


<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Date of birth:</label>

</div>

<div class="col-lg-8">

<input type="date" class="form-control" name="date_of_birth">

</div>

</div>



<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Gender:</label>

</div>

<div class="col-lg-8">

<select name="gender">

<option>male</option>

<option>female</option>

<option>others</option>


</select>

</div>

</div>




<div style="height:10px;"></div>


<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Preferred email:</label>

</div>

<div class="col-lg-8">

<input type="text" class="form-control" name="preferred_email">

</div>

</div>

<div style="height:10px;"></div>


<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Confirm email:</label>

</div>

<div class="col-lg-8">

<input type="text" class="form-control" name="confirm_email">

</div>

</div>

<div style="height:10px;"></div>


<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Password:</label>

</div>

<div class="col-lg-8">

<input type="text" class="form-control" name="password">

</div>

</div>

<div style="height:10px;"></div>


<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Phone number:</label>

</div>

<div class="col-lg-8">

<input type="text" class="form-control" name="phone_number">

</div>

</div>

<div style="height:10px;"></div>


<div class="row">

<div class="col-lg-4">

<label class="control-label" style="position:relative; top:7px;">Update:</label>

</div>

<div class="col-lg-8">

<input type="text" class="form-control" name="update">

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

