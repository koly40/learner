
<!-- Add New University -->

<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">

<div class="modal-dialog">
<br/><br/>
<div class="modal-content">

<div class="modal-header">


<center><h4 class="modal-title" id="myModalLabel">Add New University</h4></center>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

</div>


<div class="modal-body">

<div class="container-fluid">

<form id="uni_add_form" method="POST" action="university/insert.php"  enctype="multipart/form-data">


<div class="row">

<div class="col-lg-5" align="left">

<label style="position:relative; top:7px;">Uni name:</label>

</div>

<div class="col-lg-7">

<input type="text" name="uni_name" class="form-control" >

</div>

</div>

<div class="row">

<div class="col-lg-5" align="left">

<label style="position:relative; top:7px;">Establistment date:</label>

</div>

<div class="col-lg-7">

<input type="date" name="edate" class="form-control" >

</div>

</div>
<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-5" align="left">

<label style="position:relative; top:7px;">Total depart:</label>

</div>

<div class="col-lg-7">

<input type="text" class="form-control" name="total_depart" >

</div>

</div>

<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-5" align="left">

<label style="position:relative; top:7px;">Type:</label>

</div>

<div class="col-lg-7" align="left">

<select name="type">

<option>private</option>
<option>public</option>

</select>

</div>

</div>

<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-5" align="left">

<label style="position:relative; top:7px;">Location:</label>

</div>

<div class="col-lg-7">

<input type="text" class="form-control" name="location" >

</div>

</div>

<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-5" align="left">

<label style="position:relative; top:7px;">Division:</label>

</div>

<div class="col-lg-7" align="left">

<select name="division">



<option>Dhaka</option>

<option>Khulna</option>
<option>Rajsashi</option>

</select>

</div>

</div>



<div class="row">

<div class="col-lg-5">

<label class="control-label" style="position:relative; top:7px;">VC Namer:</label>

</div>

<div class="col-lg-7">

<input type="text" class="form-control" name="vc_name" >

</div>

</div>

<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-5">

<label class="control-label" style="position:relative; top:7px;">total seat:</label>

</div>

<div class="col-lg-7">

<input type="text" class="form-control" name="total_seat" >

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

