<div class="modal fade" id="detail<?php echo $crow['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h3> Scholarship Details </h3>
</div>
<div class="modal-body">
<?php
$id=$crow['id'];

$edit=$db->query("select * from uni_basic where id=$id");
$erow=$edit->fetch_assoc();
?>
<div class="container-fluid">

<div class="row">
<div class="col-lg-5" align="left">
<label style="position:relative; top:7px;">Uni Name:</label>
</div>
<div class="col-lg-7" align="left">
<?php echo $erow['university_name']; ?>
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-5" align="left">
<label style="position:relative; top:7px;">Establistment date:</label>
</div>
<div class="col-lg-7" align="left">
<?php echo $erow['establishment_date']; ?>
</div>
</div>
<div style="height:10px;"></div>
<div class="row">

<div class="col-lg-5" align="left">

<label style="position:relative; top:7px; ">Total depart:</label>

</div>

<div class="col-lg-7" align="left" style="overflow-y: auto;">

<?php echo $erow['total_depart']; ?>

</div>

</div>

<div style="height:10px;"></div>
<div class="row">

<div class="col-lg-5" align="left">

<label class="control-label" style="position:relative; top:7px;">Type:</label>

</div>

<div class="col-lg-7" align="left" style="overflow-y: auto;">

<?php echo $erow['type']; ?>

</div>

</div>

<div style="height:10px;"></div>
<div class="row">

<div class="col-lg-5" align="left">

<label class="control-label" style="position:relative; top:7px;">Location:</label>

</div>

<div class="col-lg-7" align="left">

<?php echo $erow['location']; ?>

</div>

</div>
<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-5" align="left">

<label class="control-label" style="position:relative; top:7px;">Division:</label>

</div>

<div class="col-lg-7" align="left">

<?php echo $erow['division']; ?>

</div>

</div>

<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-5" align="left">

<label class="control-label" style="position:relative; top:7px;">VC Name:</label>

</div>

<div class="col-lg-7" align="left">

<?php echo $erow['vc_name']; ?>

</div>

</div>

<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-5" align="left">

<label class="control-label" style="position:relative; top:7px;">total seat:</label>

</div>

<div class="col-lg-7" align="left">

<?php echo $erow['total_seat']; ?>

</div>

</div>

<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-12" align="left">

<a href="<?php echo $erow['link']; ?>">Click here for more</a>

</div>


</div>







</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>
</div>

</div>
</div>
</div>
