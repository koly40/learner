<div class="modal fade" id="detail<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h3> Result Details </h3>
</div>
<div class="modal-body">
<?php
$edit=$mysqli->query("select * from result where id=".$row['id']);
$erow=$edit->fetch_assoc();
?>
<div class="container-fluid">

<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">Title:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['title']; ?>
</div>
</div>
<!-- New -->

            <div style="height:10px;"></div>
            <div class="row">
            <div class="col-lg-4" align="left">
            <label style="position:relative; top:7px;">Admission Type:</label>
            </div>
            <div class="col-lg-8" align="left">
            <?php echo $erow['admission_type']; ?>
            </div>
            </div>
<!-- New -->


<div style="height:10px;"></div>
            <div class="row">
            <div class="col-lg-4" align="left">
            <label style="position:relative; top:7px;">University Id:</label>
            </div>
            <div class="col-lg-8" align="left">
            <?php echo $erow['university_id']; ?>
            </div>
            </div>





<div style="height:10px;"></div>
<div class="row">

<div class="col-lg-4" align="left">

<label style="position:relative; top:7px; ">Result Publish Date:</label>

</div>

<div class="col-lg-8" align="left" style="overflow-y: auto;">

<?php echo $erow['result_publish_date']; ?>

</div>

</div>



<div style="height:10px;"></div>
<div class="row">

<div class="col-lg-4" align="left">

<label class="control-label" style="position:relative; top:7px;">Notice Link:</label>

</div>

<div class="col-lg-8" align="left">

<?php echo $erow['notice_link']; ?>

</div>

</div>
<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4" align="left">

<label class="control-label" style="position:relative; top:7px;">Expire Date:</label>

</div>

<div class="col-lg-8" align="left">

<?php echo $erow['expire_date']; ?>

</div>

</div>


<!--


<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4" align="left">

<label class="control-label" style="position:relative; top:7px;">Start Date:</label>

</div>

<div class="col-lg-8" align="left">




</div>

</div>

<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4" align="left">

<label class="control-label" style="position:relative; top:7px;">Last Date:</label>

</div>

<div class="col-lg-8" align="left">


</div>

</div> -->

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
