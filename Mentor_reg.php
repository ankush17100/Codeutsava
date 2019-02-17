<?php
    ob_start();
    session_start();
?>
<?php include('includes/header.php') ?>


<!-- BLUE WRAP -->
<!-- ***************************************************************************************************************** -->
<div id="blue">
    <div class="container">
        <div class="row">
            <h3>Contact.</h3>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /blue -->


<div class="container mtb">
    <div class="row">
        <div class="col-lg-8">
            <h4>Mentors get ready to share your knowledge, we got you a platform out here!</h4>
            <div class="hline"></div>
            <p>Let startups learn from ur experience</p>
            <div class="panel-body">
                <div class="well" align="center" div class="col-sm-10"><strong>Mentor's Application Form</strong></div>
                <div class="container">
                    <form class="form-horizontal" action="" method="post" role="form">

                        <div class="form-group">
                            <label for="Startupname" class="col-sm-2 control-label" id="f">Mentor Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="Startupname" placeholder="Enter your  Name here" name="mentor_full_name" required>
                            </div>
                        </div>


                        
                        <div class="form-group">
                            <label for="description" class="col-sm-2 control-label" id="t">Expertise </label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" id="description" rows="8" placeholder="Enter your expertise here" name="expertise" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label" id="l">Personal Email ID</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="Enter your personal email id" name="mentor_email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="number" class="col-sm-2 control-label" id="l">Contact Number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="number" placeholder="Enter contact number" name="mentor_contact_number" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="proposal" class="col-sm-2 control-label" id="l">Description</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="proposal" placeholder="Enter your brief description here" name="description" required>
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <label for="category" class="col-sm-2 control-label" id="l">Designation </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="category" placeholder="Enter your current Designation here" name="designation" required>
                            </div>
                        </div>

                    
                        <div class="form-group">
                            <label for="years" class="col-sm-2 control-label" id="l">Past Experiences</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" id="description" placeholder="Enter a description of past experience here"  name="past_experience" required></textarea>
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label><input type="checkbox" required>Accept the terms and conditions</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-8 col-sm-">
                                <button type="submit" class="btn btn-primary" align="center" name="submit">Apply</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/mentor_register.php') ?>



<?php include('includes/footer.php') ?>
