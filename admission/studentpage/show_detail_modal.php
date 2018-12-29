<div class="modal fade" id="detail<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h3> Student Details </h3>
</div>
<div class="modal-body">
<?php
$edit=$mysqli->query("select * from student_form where id=".$row['id']);
$erow=$edit->fetch_assoc();
?>
<div class="container-fluid">

<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">First name:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['first_name']; ?>
</div>
</div>

<div style="height:10px;"></div>
<div class="row">

<div class="col-lg-4" align="left">

<label class="control-label" style="position:relative; top:7px;">Last name:</label>

</div>

<div class="col-lg-8" align="left">

<?php echo $erow['last_name']; ?>

</div>

</div>

<div style="height:10px;"></div>
<div class="row">

<div class="col-lg-4" align="left">

<label style="position:relative; top:7px; ">Date of birth:</label>

</div>

<div class="col-lg-8" align="left" style="overflow-y: auto;">

<?php echo $erow['date_of_birth']; ?>

</div>

</div>

<div style="height:10px;"></div>
<div class="row">

<div class="col-lg-4" align="left">

<label class="control-label" style="position:relative; top:7px;">Gender:</label>

</div>

<div class="col-lg-8" align="left" style="overflow-y: auto;">

<?php echo $erow['gender']; ?>

</div>

</div>

<div style="height:10px;"></div>
<div class="row">

<div class="col-lg-4" align="left">

<label class="control-label" style="position:relative; top:7px;">Preferred email:</label>

</div>

<div class="col-lg-8" align="left">

<?php echo $erow['preferred_email']; ?>

</div>

</div>




<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4" align="left">

<label class="control-label" style="position:relative; top:7px;">Confirm email:</label>

</div>

<div class="col-lg-8" align="left">

<?php echo $erow['confirm_email']; ?>

</div>

</div>

<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4" align="left">

<label class="control-label" style="position:relative; top:7px;">Password:</label>

</div>

<div class="col-lg-8" align="left">

<?php echo $erow['password']; ?>

</div>

</div>


<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4" align="left">

<label class="control-label" style="position:relative; top:7px;">Phone number:</label>

</div>

<div class="col-lg-8" align="left">

<?php echo $erow['phone_number']; ?>

</div>

</div>
                                                
  <div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4" align="left">

<label class="control-label" style="position:relative; top:7px;">Update:</label>

</div>

<div class="col-lg-8" align="left">

<?php echo $erow['update']; ?>

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
