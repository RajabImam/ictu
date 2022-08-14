<?php require('includes/helpers.php'); ?>
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
     <input name="email" type="email" class="form-control" placeholder="Email">
  </div>

  <div class="form-group">
      <input name="password" type="password" class="form-control" placeholder="Password">
  </div>
  <div class="form-group">
      <input name="password2" type="password" class="form-control" placeholder="Confirm Password">
  </div>
  
     <!--<a href="signup.php">Back</a>-->
     <div class="btn-group">
     <button class="btn btn-info" name="back" type="submit">Back</button>
     <button class="btn btn-info center-block" name="signup" type="submit">Create Account</button>
     </div>
  </form>

  </div>
  
</div>





</div>
<?php include "includes/sidebar2.php"; ?>

</div>


        

</div>
<?php renderFooter(); ?>