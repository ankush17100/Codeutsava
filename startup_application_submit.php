<?php 
    ob_start();
    session_start();
    include('includes/header.php') ?>

<div id="blue">
    <div class="container">
      <div class="row">
        <h3>Startup Profile</h3>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /blue -->
  
<div class="container mtb">
<?php 
    if(isset($_SESSION['startup_name'])){
    ?>

<h1><?php echo $_SESSION['startup_name'] ?> is registered. You will be notified when you are shortlisted for interview.</h1>

<?php } ?>
</div>


<?php include('includes/footer.php') ?>
