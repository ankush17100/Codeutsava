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
    if(isset($_GET['st_id'])){
        $startup_id =  mysqli_real_escape_string($conn,$_GET['st_id']);
        
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
        
        <p><u><h4>Website</h4></u></p>
        <p class="des"><b><a href="<?php echo $r['startup_website_link'].'">'.$r['startup_website_link'] ?></a></b></p>
        
        <p><u><h4>Startup Category</h4></u></p>
        <p class="des"><b><?php echo $r['startup_category']?></b></p>
        
<!--        <p><br/><a href="contact.html" class="btn btn-link" style="background-color:yellow;"><b>See Mentor</b></a></p>-->
<!--        <marquee style="background:yellow">This is for recent updates</esentationmarquee>-->
      </div>
    </div>
  </div>
  
<?php }
    }?>
  <!-- *****************************************************************************************************************
     TEEAM MEMBERS
     ***************************************************************************************************************** -->

  <div class="container mtb">
    <div class="row centered">
      <h3 class="mb">MEET OUR TEAM</h3>

      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="he-wrap tpl6">
          <img src="G:/xampp/htdocs/team01.jpg" alt="" height="100px" width="100px">
          <div class="he-view">
            <div class="bg a0" data-animate="fadeIn">
              <h3 class="a1" data-animate="fadeInDown">Contact Me:</h3>
              <a href="#" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-envelope"></i></a>
              <a href="#" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-twitter"></i></a>
            </div>
            <!-- he bg -->
          </div>
          <!-- he view -->
        </div>
        <!-- he wrap -->
        <h4>Mark Webber</h4>
        <h5 class="ctitle">CEO</h5>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <div class="hline"></div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="he-wrap tpl6">
          <img src="team01.jpg" alt="">
          <div class="he-view">
            <div class="bg a0" data-animate="fadeIn">
              <h3 class="a1" data-animate="fadeInDown">Contact Me:</h3>
              <a href="#" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-envelope"></i></a>
              <a href="#" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-twitter"></i></a>
            </div>
            <!-- he bg -->
          </div>
          <!-- he view -->
        </div>
        <!-- he wrap -->
        <h4>Paul Jameson</h4>
        <h5 class="ctitle">LEAD DESIGNER</h5>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <div class="hline"></div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="he-wrap tpl6">
          <img src="team01.jpg" alt="">
          <div class="he-view">
            <div class="bg a0" data-animate="fadeIn">
              <h3 class="a1" data-animate="fadeInDown">Contact Me:</h3>
              <a href="#" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-envelope"></i></a>
              <a href="#" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-twitter"></i></a>
            </div>
            <!-- he bg -->
          </div>
          <!-- he view -->
        </div>
        <!-- he wrap -->
        <h4>Laura Sommers</h4>
        <h5 class="ctitle">LEAD DEVELOPER</h5>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <div class="hline"></div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="he-wrap tpl6">
          <img src="team01.jpg" alt="">
          <div class="he-view">
            <div class="bg a0" data-animate="fadeIn">
              <h3 class="a1" data-animate="fadeInDown">Contact Me:</h3>
              <a href="#" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-envelope"></i></a>
              <a href="#" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-twitter"></i></a>
            </div>
            <!-- he bg -->
          </div>
          <!-- he view -->
        </div>
        <!-- he wrap -->
        <h4>Martin Blunt</h4>
        <h5 class="ctitle">MARKETING</h5>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <div class="hline"></div>
      </div>

    </div>
  </div>

  <!-- *****************************************************************************************************************
     TESTIMONIALS
     ***************************************************************************************************************** -->
  <div id="twrap">
    <div class="container centered">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <i class="fa fa-comment-o"></i>
          <p>Entrepreneur with a demonstrated history of working in the information technology and services industry. Juggling between startups that are in the process of making a dent to the industry and a running a full stack software development firm that is serving some of the biggest names in Government and Private sectors. Skilled in Negotiation, Public Speaking, and good at programming in Java. Strong entrepreneurship professional with a Bachelor of Engineering (BE) focused in Computer Science and a programmer at heart.</p>
          <h4><br/>Puru Agrawal</h4>
          <p>CEO BlueBanyan</p>
        </div>
      </div>
    </div>
  </div>

  <!-- *****************************************************************************************************************
     OUR CLIENTS
     ***************************************************************************************************************** -->
  <div id="cwrap">
    <div class="container">
      <div class="row centered">
        <h3>Top Services</h3>
        <div class="col-lg-3 col-md-3 col-sm-3">
          <p class="tr"><b>Website Development</b></p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
          <p class="tr"><b>Digital Marketing</b></p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
          <p class="tr"><b>Facebook Marketing</b></p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
          <p class="tr"><b>PPR Advertising</b></p>
        </div>
      </div>
    </div>
  </div>



<?php include('includes/footer.php') ?>
