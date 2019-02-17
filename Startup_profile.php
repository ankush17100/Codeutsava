
<?php ob_start();
session_start(); ?>
<?php include('includes/db.php') ?>
<?php include('includes/header.php') ?>
<style type="text/css">
    .des{
        color:navy;
    }
    .des em{
        color:navy;
        font-size:30px;
        font-family:"Times New Roman";
        background: linear-gradient(yellow,white);

    }
    .desc{
        color:navy;

    }
    .tr{
        color:navy;
        font-size:20px;
        background:radial-gradient(white,grey);
    }
</style>
  <!-- *****************************************************************************************************************
     BLUE WRAP
     ***************************************************************************************************************** -->
  <div id="blue">
    <div class="container">
      <div class="row">
        <h3>Startup Profile.</h3>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /blue -->

  <!-- *****************************************************************************************************************
     AGENCY ABOUT
     ***************************************************************************************************************** -->
<?php
    if(isset($_SESSION['username']) && $_SESSION['role']=='startup'){
        $startup_id =  mysqli_real_escape_string($conn,$_SESSION['startup_id']);
        
         $query = "SELECT * from startup_applications where application_id=$startup_id";
         $res = mysqli_query($conn,$query);
            while($r = mysqli_fetch_assoc($res)){
                $startup_id = $r['application_id'];
                $startup_name = $r['startup_name'];
                $startup_contact = $r['startup_contact'];
                $startup_email = $r['startup_email'];
                $startup_description = $r['startup_description'];
                $query2 = "SELECT * FROM founders_applications WHERE application_id = $startup_id";

                $res2 = mysqli_query($conn,$query2);
                if(!$res2){
                    echo mysqli_error($conn);
                }
  
    
?>
  <div class="container mtb">
    <div class="row" style="background:radial-gradient(white,aqua,white,aqua,white,aqua)">
      <div class="col-lg-12">
        <h1 style="color:navy;font-family:Comic Sans MF;background:linear-gradient(yellow,white);" ><center><?php echo $startup_name ?></center></h1>
        <br>
        <p><u><h4>Description</h4></u></p>
        <p style="color:navy;"><b><?php echo $startup_description ?></b></p>
        <br>
        
        <p><u><h4>Founder's Name</h4></u></p>
        
        <?php while($r2 = mysqli_fetch_assoc($res2)){ ?>
            <p class="des" > <b>Name: <?php echo $r2['full_name'] ?></b>.</p>
            <p class="des" > <b>Contact Number: <?php echo $r2['contact_number'] ?></b>.</p>
            <p class="des" > <b>Email: <?php echo $r2['email'] ?></b>.</p>
            <hr>
        <?php } ?>
        
        <p><u><h4>Years of the experience of the startup</h4></u></p>
        <p class="desc"><b>The startup has experience of <?php echo $r['startup_years_experience'] ?> Years</b></p>
        
        <p><u><h4>Startup Email-address</h4></u></p>
        <p class="des"><b><a><?php echo $r['startup_email']?></a> : This Email address could be used for contact.</b></p>
        
        <p><u><h4>Startup Contact Number</h4></u></p>
        <p class="des"><b><a><?php echo $r['startup_contact']?></a> : This Contact Number could be used for any queries.</b></p>
        
        <p><u><h4>Expected Seed Fund</h4></u></p>
        <p class="des"><b>The Expected seed fund is <?php echo $r['startup_seed_fund']?></b></p>
        
        <p><u><h4>Past Experience</h4></u></p>
        <p class="des"><b><?php echo $r['startup_past_experience']?></b></p>
        
        <p><u><h4>Proposal</h4></u></p>
        <p class="des"><b><a href="<?php echo $r['startup_proposal_link'] ?>">Proposal</a></b></p>
        
        <p><u><h4>Presentation</h4></u></p>
        <p class="des"><b><a href="<?php echo $r['startup_presentation_link'] ?>">Presentation</a></b></p>
        
        <p><u><h4>DIPP NUMBER</h4></u></p>
        <p class="des"><b><?php echo $r['DIPP_NUMBER']?></b></p>
        <p class="des"><b>Verified:<?php echo $r['startup_verified'] ?> &nbsp;&nbsp;&nbsp; </b></p>
        
        <p><u><h4>Website</h4></u></p>
        <p class="des"><b><a href="<?php echo $r['startup_website_link'].'">'.$r['startup_website_link'] ?></a></b></p>
        
        <p><u><h4>Startup Category</h4></u></p>
        <p class="des"><b><?php echo $r['startup_category']?></b></p>
        
        <p class="des"><b>Shortlisted:<?php echo $r['shortlisted'] ?> &nbsp;&nbsp;&nbsp;</b></p>
        
        <p class="des"><b>INTERVIEW DATE:<?php echo $r['interview_date'] ?> &nbsp;&nbsp;&nbsp;</b></p>
        
        <p class="des"><b>INTERVIEW TIME:<?php echo $r['interview_time'] ?> &nbsp;&nbsp;&nbsp;</b></p>
        
        <p class="des"><b>INTERVIEW VENUE:<?php echo $r['interview_venu'] ?> &nbsp;&nbsp;&nbsp;</b></p>
        
        <br>
        <br>
        
        <p class="des"><b>Selected:<?php echo $r['selected'] ?> &nbsp;&nbsp;&nbsp;</b></p>
      
        <a href="mentor_add.php">MENTORS LIST</a>
<!--        <p><br/><a href="contact.html" class="btn btn-link" style="background-color:yellow;"><b>See Mentor</b></a></p>-->
<!--        <marquee style="background:yellow">This is for recent updates</esentationmarquee>-->
      </div>
    </div>
  </div>
  
<?php }
    }?>
    

  

<?php include('includes/footer.php') ?>
