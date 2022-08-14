<?php include "includes/connection.php"; ?>
<?php ob_start(); ?>
<?php session_start(); ?>
<?php

if(!isset($_SESSION['ictemail'])) {
 
     header("Location: index.php");

}
?>
<?php include 'includes/functions.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>
<div class="container">
<h5 class="text-primary">Welcome: <?php echo $_SESSION['name']; ?> <a class="pull-right btn btn-primary" href="includes/logout.php"> Logout </a></h5>
           <hr>
<div class="row">

<div class="col-md-8">
    
<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Contact Course Admin</h3>
  </div>
  <div class="panel-body">
                    <form action="#" method="post">
                    <?php
                    contactUs();
                      
                    ?>
                    <div class="form-group">
                        <input name="name" type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input name="subject" type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <input name="email" type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="Message"></textarea>  
                    </div>
                    <button class="btn btn-info center-block" name="contactUs" type="submit">Send Message</button>
                    </form>

                    

  </div>
  
</div>





</div>
<?php include "includes/sidebar.php"; ?>

</div>


        

</div>
<?php include 'includes/footer.php'; ?>