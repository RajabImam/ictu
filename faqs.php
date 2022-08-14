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
    <h3 class="panel-title">Frequently Ask Questions</h3>
  </div>
  <div class="panel-body">
   <table class="table table-responsive">
                    	<tbody>
                            
                            <?php
								findFaqs();
							?>
                            </tbody>
                    	  </table>        

  </div>
  
</div>

</div>
<?php include "includes/sidebar.php"; ?>

</div>


        

</div>

<?php include 'includes/footer.php'; ?>