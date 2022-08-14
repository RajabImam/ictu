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

   <div class="col-lg-12">
                       
    <div class="col-xs-6">
    <h3>My Courses</h3>
    <div class="table-hover">
        <table class="table">
        
         <?php
         /*$query = "SELECT * FROM registeredcourse WHERE id = matricno";
        $select_course = mysqli_query($connection,$query);
         $count = mysqli_num_rows($select_course);
        if ($count >=1) {
           echo myCourses();
         }else{
      echo "<td>You have not register any course. 
      To register click on Register Course Tab or <a href='register_course.php'>Click Here</a></td>";
    }*/ 
         //myCourses();
            
  //$id = $_SESSION['matno'];

  $query = "SELECT * FROM registeredcourse WHERE matricno = '".$_SESSION['matno']."' ";
    $select_course = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($select_course))
    {
    $id = $row['id'];
    $course1 = $row['course1'];
    $course2 = $row['course2'];
    $course3 = $row['course3'];
    $course4 = $row['course4'];
    $course5 = $row['course5'];
    $course6 = $row['course6'];
 

     echo " <tr>
      <td>{$course1}</td> 
    </tr>
    <tr>
   <td>{$course2}</td>
   </tr>
    <tr>
    <td>{$course3}</td>
    </tr>
    <tr>
    <td>{$course4}</td>
    </tr>
    <tr>
    <td>{$course5}</td>
    </tr>
    <tr>
    <td>{$course6}</td>
    </tr>";

      }

$count = mysqli_num_rows($select_course);
      if ($count == 0) {
        # code...
        echo "<td>You have not register any course. 
      To register click on Register Course Tab or <a href='register_course.php'>Click Here</a></td>";
      echo "<tr><td>Deadline: 25th October, 2017</td></tr>";
      }
    
?>
         
    </table>
    </div>
    </div>


    <div class="col-xs-6">
    <h3>Personal Information</h3>

  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="text-decoration:none;" aria-expanded="true" aria-controls="collapseOne">
          Matricule No
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <?php echo $_SESSION['matno']; ?>  
      </div>
    </div>
  </div>
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingTwo" >
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="text-decoration:none;" aria-expanded="false" aria-controls="collapseTwo">
          Email
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <?php echo $_SESSION['ictemail']; ?>  
      </div>
    </div>
  </div>
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" style="text-decoration:none;" aria-expanded="false" aria-controls="collapseThree">
          Name
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <?php echo $_SESSION['name']; ?> 
      </div>
    </div>
  </div>

 <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" style="text-decoration:none;" aria-expanded="false" aria-controls="collapseFour">
          Date of Birth
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
        <?php echo $_SESSION['dob']; ?>  
      </div>
    </div>
  </div>

   <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingFive">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" style="text-decoration:none;" aria-expanded="false" aria-controls="collapseFive">
          Phone Number
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body">
        <?php echo $_SESSION['phone']; ?>  
      </div>
    </div>
  </div>

   <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingSix">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" style="text-decoration:none;" aria-expanded="false" aria-controls="collapseSix">
          Department
        </a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
      <div class="panel-body">
        <?php echo $_SESSION['dept']; ?>  
      </div>
    </div>
  </div>

   <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingSeven">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" style="text-decoration:none;" aria-expanded="false" aria-controls="collapseSeven">
          Program
        </a>
      </h4>
    </div>
    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
      <div class="panel-body">
        <?php echo $_SESSION['program']; ?>  
      </div>
    </div>
  </div>

   <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingEight">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" style="text-decoration:none;" aria-expanded="false" aria-controls="collapseEight">
          Major
        </a>
      </h4>
    </div>
    <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
      <div class="panel-body">
        <?php echo $_SESSION['major']; ?>  
      </div>
    </div>
  </div>

   <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingNine">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" style="text-decoration:none;" aria-expanded="false" aria-controls="collapseNine">
          Level
        </a>
      </h4>
    </div>
    <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
      <div class="panel-body">
        <?php echo $_SESSION['level']; ?>
      </div>
    </div>
  </div>
 
</div>

    </div>
    </div>
 
  </div>
   



        

</div>

<?php  include 'includes/footer.php'; ?>