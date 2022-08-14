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
               <!-- <div class="col-md-12">
                    <h3>Personal Information</h3>

  <div class="table-responsive table-hover">
  <table class="table">
    <th>MatNo</th>
    <th>Email</th>
    <th>Name</th>
    <th>DOB</th>
    <th>Phone No</th>
    <th>Dept</th>
    <th>Program</th>
    <th>Major</th>
    <th>Level</th>
    <tr>
      <td><?php //echo $_SESSION['matno']; ?></td>
      <td><?php //echo $_SESSION['ictemail']; ?></td>
      <td><?php //echo $_SESSION['name']; ?></td>
      <td><?php //echo $_SESSION['dob']; ?></td> 
      <td><?php //echo $_SESSION['phone']; ?></td>
      <td><?php //echo $_SESSION['dept']; ?></td>
      <td><?php //echo $_SESSION['program']; ?></td>
      <td><?php //echo $_SESSION['major']; ?></td>
      <td><?php //echo $_SESSION['level']; ?></td>
    </tr>
    </table>
    </div>
                    
                </div>-->
            
            <div class="col-md-12">
                 <h3>Course Information - Spring 2017</h3>
                 <div class="table-responsive table-hover">
  <table class="table">
    <th>Code</th>
    <th>Title</th>
    <th>Description</th>
    <th>Lecturer</th>
    <th>Credit</th>
    <th>Outline</th>
    <?php
    findAllCourses();
    ?>
    </table>
    </div>
                    
            </div>
             </div>
   



        

</div>
<?php include 'includes/footer.php'; ?>