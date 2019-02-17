<?php ob_start(); session_start(); ?>
<?php include('includes/db.php') ?>
<?php include('includes/header.php') ?>

<style>

.big_card{
	box-shadow:0 4px 8px 0 rgba(0,0,0,0.2);
	transition:0.3s;
	width:50%;
}
.big_card:hover{
	box-shadow:0 8px 16px 0 rgba(0,0,0,0.2);
}
.contain{
	padding:2px 16px;

}


</style>
<div id="blue">
    <div class="container">
      <div class="row">
        <h3>Mentors List</h3>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
<div class="container mtb">
<?php if($_SESSION['role']=='startup') {
    $query = "SELECT * FROM mentors_applications";
    $res = mysqli_query($conn,$query);
    while($r = mysqli_fetch_assoc($res)){
        
    ?>
<div class=big_card>
    
	<div class=contain>
		<h4 id=field>Mentor name</h4><?php echo $r['mentor_full_name'] ?>
		 <a href="mentor_add.php?add=<?php echo $r['mentor_id'] ?>"><button class="btn btn-primary" display="inline" >Add</button></a>
	</div>
	
</div>

<?php
}
}
    ?>
  <?php  
    if(isset($_SESSION['username']) && $_SESSION['role']=='startup' && isset($_GET['add'])){
        $query = "INSERT INTO mentor".$_GET['add']."_requests (startup_id,date,time)
        VALUES({$_SESSION['startup_id']},'now()','now()')";
        $res = mysqli_query($conn,$query);
        if(!$res)
            echo "Error!";
    }
        ?>
</div>



<?php include('includes/footer.php') ?>


