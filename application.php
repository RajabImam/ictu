<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>
<div class="container">
           <hr>
<div class="row">

<div class="col-md-8">
  
<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title"><?php renderHeader(["title" => "Create Account"]); ?></h3>
  </div>
  <div class="panel-body">
   
  <form action="#" method="post">

  <div class="form-group">
     <input name="name" type="text" class="form-control" placeholder="Name">
  </div>
<!--  <div class="input-group date" data-provide="datepicker">
    <input type="text" class="form-control">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>-->
  <div class="form-group">
      <input name="dob" type="text" class="form-control" placeholder="Date of Birth">
  </div>
  <div class="form-group">
  <label for="program">Select Program:</label>
  <select class="form-control" id="program">
    <option>Software Engineering</option>
    <option>Computer Science</option>
    <option>Information System Network</option>
    <option>Business Admin</option>
  </select>
</div>
   <div class="form-group">
      <input name="address" type="text" class="form-control" placeholder="Address">
  </div>
   <div class="form-group">
      <input name="phoneNumber" type="text" class="form-control" placeholder="Phone Number">
  </div>
   <div class="form-group">
      <input name="parentName" type="text" class="form-control" placeholder="Guardian/Parent Name">
  </div>
   <div class="form-group">
      <input name="parentMobile" type="text" class="form-control" placeholder="Guardian/Parent Phone Number">
  </div>
   <div class="form-group">
  <label for="qualification">Select Highest Qualification:</label>
  <select class="form-control" id="qualification">
    <option>Bsc</option>
    <option>Advanced Diploma</option>
    <option>A Level</option>
    <option>O 'Level</option>
  </select>
</div>
    <!-- <a href="next.php">Next</a>-->
    <button  class="btn btn-info center-block" name="next" type="submit">Next</button>
  </form>

  </div>
  
</div>





</div>
<?php include "includes/sidebar2.php"; ?>

</div>


        

</div>
<?php include 'includes/footer.php'; ?>