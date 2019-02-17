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
            <h3>Startup Applications</h3>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /blue -->

<div class="container mtb">
  <?php
    $query = "SELECT * from startup_applications";
    $res = mysqli_query($conn,$query);
    while($r = mysqli_fetch_assoc($res)){
        $startup_id = $r['application_id'];
        $startup_name = $r['startup_name'];
        $startup_contact = $r['startup_contact'];
        $startup_email = $r['startup_email'];
        $query2 = "SELECT * FROM founders_applications WHERE application_id = $startup_id ORDER BY founders_id LIMIT 1 ";
        
        $res2 = mysqli_query($conn,$query2);
        if(!$res2){
            echo mysqli_error($conn);
        }
        while($r3 = mysqli_fetch_assoc($res2)){
            $founder_name = $r3['full_name'];
    ?>
    <div class='big_card'>
        <div class='container'>
            <span><strong>Startup ID: &nbsp;&nbsp;</strong></span><h4 style="display:inline"><?php echo $startup_id ?></h4><br>
            <span><strong>Startup Name:&nbsp;&nbsp;&nbsp;</strong></span><h4 style="display:inline"><?php echo $startup_name ?></h4><br>
            <span><strong>Founder's Name:&nbsp;&nbsp;</strong></span><h4 style="display:inline"><?php echo $founder_name ?></h4><br>
            <span><strong>Email ID:&nbsp;&nbsp;&nbsp;</strong></span><h4 style="display:inline"><?php echo $startup_email ?></h4><br>
            <span><strong>Contact Number:&nbsp;&nbsp;</strong></span><h4 style="display:inline"><?php echo $startup_contact ?></h4><br>
            <a href = 'Startup_description.php?st_id=<?php echo $startup_id ?>'><button class="btn btn-primary" type="button">View</button></a>
        </div>
    </div>
    <?php } }?>
</div>


<?php include('includes/footer.php') ?>
