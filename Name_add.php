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
        <h3>Portfolio.</h3>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
<div class="container mtb">
<div class=big_card>
	<div class=contain>
		<h4 id=field>Mentor name</h4>
		<h4 id=field>Mentor name</h4>
		<h4 id=field>Mentor name</h4>
		 <button class="btn btn-primary" display="inline;" >Add</button>
	</div>
</div>
</div>



<?php include('includes/footer.php') ?>


