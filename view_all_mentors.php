<?php include('includes/db.php') ?>
<?php include('includes/header.php') ?>

  <style>
        .big_card{
            box-shadow:0 4px 8px 0 rgba(0,0,0,0.2);
            transition:0.3s;
            width:50%;
            color:black;
            padding: 10px;
        }
        .big_card:hover{
	        box-shadow:0 8px 16px 0 rgba(0,0,0,0.2);
        }


</style>
<div id="blue">
    <div class="container">
        <div class="row">
            <h3>Mentor Applications Lists</h3>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /blue -->

<div class="container mtb">
  <?php
    $query = "SELECT * from mentors_applications";
    $res = mysqli_query($conn,$query);
    while($r = mysqli_fetch_assoc($res)){
        
        $mentor_id = $r['mentor_id'];
        $mentor_full_name = $r['mentor_full_name'];
        $mentor_contact_number = $r['mentor_contact_number'];
        $mentor_email = $r['mentor_email'];
        $designation = $r['designation'];
        $selected = $r['selected'];
        
    ?>
    <div class='big_card'>
        <div class='container'>
            <span><strong>Mentor ID: &nbsp;&nbsp;</strong></span><h4 style="display:inline"><?php echo $mentor_id ?></h4><br>
            <span><strong>Mentor Name:&nbsp;&nbsp;&nbsp;</strong></span><h4 style="display:inline"><?php echo $mentor_full_name ?></h4><br>
            <span><strong>Email ID:&nbsp;&nbsp;&nbsp;</strong></span><h4 style="display:inline"><?php echo $mentor_email ?></h4><br>
            <span><strong>Contact Number:&nbsp;&nbsp;</strong></span><h4 style="display:inline"><?php echo $mentor_contact_number ?></h4><br>
            <span><strong>Designation:&nbsp;&nbsp;</strong></span><h4 style="display:inline"><?php echo $designation ?></h4><br>
            <span><strong>SELECTED:&nbsp;&nbsp;</strong></span><h4 style="display:inline"><?php echo $selected ?></h4><br>
            <a href = 'Mentor_description.php?mt_id=<?php echo $mentor_id ?>'><button class="btn btn-primary" type="button">View</button></a>
        </div>
    </div>
    <?php } ?>
</div>


<?php include('includes/footer.php') ?>
