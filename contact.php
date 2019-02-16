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


    <!-- *****************************************************************************************************************
   CONTACT FORMS
   ***************************************************************************************************************** -->

  <div class="container mtb">
    <div class="row">
      <div class="col-lg-8">
        <h4>Let us know u!</h4>
        <div class="hline"></div>
        <p>Let us know what your startup is all about by submitting the basic info about ur startup.</p>
        <div class="panel-body">
<div class="well" align="center" div class="col-sm-10"><strong>Startup Application Form</strong></div>
<div class="container">
  <form class="form-horizontal" role="form" method="post" onsubmit="display()">
    <div class="form-group">
      <label for="Startupname" class="col-sm-2 control-label" id="f">Startup Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="Startupname" placeholder="Enter your startup Name" required>
      </div>
    </div>

    
<div class="form-group">
  
  <table id="myTable" class=" table table-striped table-bordered order-list">
    <thead>
        <tr>
            <td class="col-sm-1">Name</td>
            <td class="col-sm-1">Gmail</td>
            <td class="col-sm-1">Phone</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="col-sm-1">
                <input type="text" name="name" class="form-control" />
            </td>
            <td class="col-sm-1">
                <input type="mail" name="mail"  class="form-control"/>
            </td>
            <td class="col-sm-1">
                <input type="text" name="phone"  class="form-control"/>
            </td>
            <td class="col-sm-1"><a class="deleteRow"></a>

            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="0.5" style="text-align: left;">
                <input type="button" class="btn btn-sm btn-block " id="addrow" value="Add more Founders" />
            </td>
        </tr>
        <tr>
        </tr>
    </tfoot>
</table>
</div>


  
   

    <div class="form-group">
      <label for="description" class="col-sm-2 control-label" id="t">Description </label>
        <div class="col-sm-10">
          <textarea type="text" class="form-control" id="description" rows="8" placeholder="Enter startup description here"></textarea>
        </div>
    </div>
    <div class="form-group">
      <label for="email" class="col-sm-2 control-label" id="l">Startup Email ID</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" placeholder="Enter startup common email id" required>
        </div>
    </div>
    <div class="form-group">
      <label for="proposal" class="col-sm-2 control-label" id="l">Proposal</label>
        <div class="col-sm-10">
          <input type="file" class="form-control" id="proposal" placeholder="Upload your proposal here" required>
        </div>
    </div>
    <div class="form-group">
      <label for="number" class="col-sm-2 control-label" id="l">Startup Contact Number</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="number" placeholder="Enter contact number" required>
        </div>
    </div>


    <div class="form-group">
      <label for="resume" class="col-sm-2 control-label" id="l">Detailed Presentation</label>
        <div class="col-sm-10">
          <input type="file" class="form-control" id="resume" placeholder="Upload your presentation here">
        </div>
    </div>
    <div class="form-group">
      <label for="years" class="col-sm-2 control-label" id="l">Past Experiences</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="description" placeholder="Enter a description of past experience here" required>
        </div>
    </div>
    <div class="form-group">
      <label for="Experience" class="col-sm-2 control-label" id="l">Years of Experience</label>
        <div class="col-sm-10">
          <select class="form-control" id="exampleFormControlSelect1" placeholder="Enter your past years of experience here" required>
      <option>less than 1</option>
      <option>>1</option>
      <option>>5</option>
      <option>>10</option>
      </select>
        </div>
    </div>
    <div class="form-group">
      <label for="Expected_seed" class="col-sm-2 control-label" id="l">Expected seed fund range</label>
        <div class="col-sm-10">
          <select class="form-control" id="expected_seed" placeholder="Enter the seed fund you are expecting from us" required>
      <option>10000-20000</option>
      <option>20000-50000</option>
      <option>50000-1 lacs</option>
      <option>>1 lacs</option>
      </select>

        </div>
    </div>
    <div class="form-group">
      <label for="website_links" class="col-sm-2 control-label" id="l">Website links(if any)</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="expected_seed" placeholder="Enter your website link here">
        </div>
    </div>
</div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<div class="checkbox">
<label><input type="checkbox">Remember me</label>
</div>
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-8 col-sm-">
<button type="submit" class="btn btn-primary" align="center">Sign In</button></div></div>
</form>
</div>
</div>
</div>
</div>
</div>

  <!-- *****************************************************************************************************************

<?php include('includes/footer.php') ?>
