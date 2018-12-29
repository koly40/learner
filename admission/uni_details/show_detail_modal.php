<div class="modal fade" id="detail<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h3> University  Details </h3>
</div>
<div class="modal-body">
<?php
$edit=$mysqli->query("select * from uni_details where id=".$row['id']);
$erow=$edit->fetch_assoc();
?>
<div class="container-fluid">

<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">UNiversity Id:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['uni_id']; ?>
</div>
</div>
<!-- New -->

            <div style="height:10px;"></div>
            <div class="row">
            <div class="col-lg-4" align="left">
            <label style="position:relative; top:7px;">Department:</label>
            </div>
            <div class="col-lg-8" align="left">
            <?php echo $erow['department']; ?>               
            </div>                
            </div>
<!-- New -->

<div style="height:10px;"></div>
            <div class="row">
            <div class="col-lg-4" align="left">
            <label style="position:relative; top:7px;">Total Semister:</label>
            </div>
            <div class="col-lg-8" align="left">
            <?php echo $erow['total_semister']; ?>
            </div>
            </div>
            
            
            
            
            
            
            <!-- New -->

            <div style="height:10px;"></div>
            <div class="row">
            <div class="col-lg-4" align="left">
            <label style="position:relative; top:7px;">Duration:</label>
            </div>
            <div class="col-lg-8" align="left">
            <?php echo $erow['duration']; ?>               
            </div>                
            </div>
<!-- New -->
            
            
            <!-- New -->

            <div style="height:10px;"></div>
            <div class="row">
            <div class="col-lg-4" align="left">
            <label style="position:relative; top:7px;">University Name:</label>
            </div>
            <div class="col-lg-8" align="left">
            <?php echo $erow['university_name']; ?>               
            </div>                
            </div>
<!-- New -->











<!-- New -->

            <div style="height:10px;"></div>
            <div class="row">
            <div class="col-lg-4" align="left">
            <label style="position:relative; top:7px;">Division:</label>
            </div>
            <div class="col-lg-8" align="left">
            <?php echo $erow['division']; ?>               
            </div>                
            </div>
<!-- New -->




<div style="height:10px;"></div>
<div class="row">

<div class="col-lg-4" align="left">

<label style="position:relative; top:7px; ">Academic Cost:</label>

</div>

<div class="col-lg-8" align="left" style="overflow-y: auto;">

<?php echo $erow['academic_cost']; ?>

</div>

</div>




<div style="height:10px;"></div>
<div class="row">

<div class="col-lg-4" align="left">

<label class="control-label" style="position:relative; top:7px;">Eligibility::</label>

</div>

<div class="col-lg-8" align="left" style="overflow-y: auto;">

<?php echo $erow['eligibility']; ?>

</div>
</div>




<div style="height:10px;"></div>
<div class="row">

<div class="col-lg-4" align="left">

<label class="control-label" style="position:relative; top:7px;">Website Link:</label>

</div>

<div class="col-lg-8" align="left">

<?php echo $erow['website_link']; ?>

</div>

</div>





<div style="height:10px;"></div>

<div class="row">

<div class="col-lg-4" align="left">

<label class="control-label" style="position:relative; top:7px;">Location:</label>

</div>

<div class="col-lg-8" align="left">

<?php echo $erow['location']; ?>

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
