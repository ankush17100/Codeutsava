<?php 
    ob_start();
    session_start();
?>
<?php include('includes/db.php') ?>
<?php include('includes/header.php') ?>
<!--	 BLUE WRAP-->
<!--	 ***************************************************************************************************************** -->
  <div id="blue">
    <div class="container">
      <div class="row">
        <h3>Startup Login</h3>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /blue -->

  <!-- *****************************************************************************************************************
	 TITLE & CONTENT
	 ***************************************************************************************************************** -->

  <div class="container mtb">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 centered">
        <form action="" class="form" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" name = "username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name = "password">
            </div>
            <div class="form-group">
                <input type="submit" value="Login" name = "submit">
            </div>
        </form>
      </div>
    </div>
  </div>
  
<?php 
    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        
        $query = "SELECT * FROM startups_accounts WHERE username = '$username' and password='$password'";
        $res = mysqli_query($conn,$query);
        if(mysqli_num_rows($res)!=0){
            while($r = mysqli_fetch_assoc($res)){
                $_SESSION['username']=$r['username'];
                $_SESSION['startup_id']=$r['startup_id'];
                $_SESSION['role']=$r['role'];
                header('Location: Startup_profile.php');
            }
        }
        
    }
?>


  <?php include('includes/footer.php') ?>
