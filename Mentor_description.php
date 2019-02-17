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
        background: linear-gradient(white,yellow);

    }
    .desc{
        color:navy;

    }
    .tr{
        color:navy;
        font-size:20px;
        background:radial-gradient(aqua,white);
    }
    #ty{
    background-color:#00ffff;
    align:center;
    width:1100px;
    height:100px;
    overflow:scroll;
  }
</style>
  <!-- *****************************************************************************************************************
     BLUE WRAP
     ***************************************************************************************************************** -->
     
     
  <div id="blue">
    <div class="container">
      <div class="row">
        <h3>Mentor Profile</h3>
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
    if(isset($_GET['mt_id'])){
        $mentor_id =  mysqli_real_escape_string($conn,$_GET['mt_id']);
        
         $query = "SELECT * from mentors_applications where mentor_id=$mentor_id";
         $res = mysqli_query($conn,$query);
            while($r = mysqli_fetch_assoc($res)){
            
    
?>

  <div class="container mtb">
    <div class="row" style="background:radial-gradient(orange,white,orange,white,orange,white)">
      <div class="col-lg-12">

        <h1 style="color:navy;font-family:Comic Sans MF;background:linear-gradient(yellow,white);" ><center><?php echo $r['mentor_full_name'] ?></center></h1>
        <br>
        <div col-lg-6>
        <p><u><h4>About the Mentor</h4></u></p>
        <p style="color:navy;"><b><?php echo $r['description'] ?></b></p>
        <br>
        <p><u><h4>Field of Expertise</h4></u></p>
        <p class="des"><b><?php echo $r['expertise'] ?></b></p>
         
        <p><u><h4>Mentor's Email-address</h4></u></p>
        <p class="des"><b><a><?php echo $r['mentor_email'] ?></a> : This is the Email address of mentor.</b></p>
        
        <p><u><h4>Mentor Contact Number</h4></u></p>
        <p class="des"><b><a><?php echo $r['mentor_contact_number'] ?></a> : Contact Number of the mentor.</b></p>
        
        <p><u><h4>Designation</h4></u></p>
        <p class="des"><b><a><?php echo $r['designation'] ?></a> : Designation of the mentor.</b></p>
        
        <p><u><h4>Past Experience</h4></u></p>
        <p class="des"><b><?php echo $r['past_experience'] ?></b></p>
        
        <p><u><h4>SELECTED: </h4></u></p>
        <p class="des"><b><?php echo $r['selected'] ?></b><br>
            <a href="Mentor_description.php?select=<?php echo $r['mentor_id'] ?>">APPROVE</a>
        </p>
        
        
        
        <marquee style="background:yellow" onmouseover="stop()" onmouseout="start()">This is for recent updates</marquee>
      </div>
    </div>
    <br>
  </div>
  <?php }
    }?>

    <?php
    if(isset($_GET['select'])){
        $mentor_id = $_GET['select'];
        $query = "UPDATE mentors_applications SET selected='YES' WHERE mentor_id = {$mentor_id}";
        $res = mysqli_query($conn,$query);
        unset($_GET['select']);
        if($res){
            $query = "CREATE TABLE IF NOT EXISTS mentor{$mentor_id}_requests(
                    requests_id INT(5) PRIMARY KEY NOT NULL,
                    startup_id INT(5) NOT NULL,
                    FOREIGN KEY (startup_id) REFERENCES startup_applications(application_id) ON DELETE CASCADE,
                    date DATE NOT NULL,
                    time TIME NOT NULL
                    )";
            $res = mysqli_query($conn,$query);
            if(!$res){
                echo "Error1";
            }
            
            $username = 'mentor'.$mentor_id;
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $length = 10;
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            $password = $randomString;
            
            $query = "INSERT INTO mentors_accounts (username, password, role, mentor_id) VALUES(
                        '$username','$password','mentor' ,{$mentor_id}    
                    )";
            
            $res = mysqli_query($conn,$query);
            if(!$res){
                echo "Error3";
            }
            
            
            header('Location: Mentor_description.php?mt_id='.$mentor_id);
        }
        else
            echo mysqli_error($conn);
    }
?>
  <!-- *****************************************************************************************************************
     OUR CLIENTS
     ***************************************************************************************************************** -->
  <div id="cwrap">
    <div class="container">
      <div class="row centered">
        <h3>Connected Startups</h3>
        <div class="col-lg-3 col-md-3 col-sm-3">
          <p class="tr"><b>BlueBanyan</b></p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
          <p class="tr"><b>36INC</b></p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
          <p class="tr"><b>DEVapp</b></p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
          <p class="tr"><b>Sapp</b></p>
        </div>
      </div>
    </div>
  </div>



<?php include('includes/footer.php') ?>
