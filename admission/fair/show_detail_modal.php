<div class="modal fade" id="detail<?php echo $row['fair_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h3> Fair  Details </h3>
</div>
<div class="modal-body">
<?php
$edit=$mysqli->query("select * from adm_fair where fair_id=".$row['fair_id']);
$erow=$edit->fetch_assoc();
?>
<div class="container-fluid">

<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">Name:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['name']; ?>
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">Type:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['type']; ?>
</div>
</div>
<div style="height:10px;"></div>


<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4" align="left">

<label class="control-label" style="position:relative; top:7px;">Start Date:</label>

</div>

<div class="col-lg-8" align="left">

<?php echo $erow['start_date']; ?>

</div>

</div>

<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4" align="left">

<label class="control-label" style="position:relative; top:7px;">End Date:</label>

</div>

<div class="col-lg-8" align="left">

<?php echo $erow['end_date']; ?>

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
