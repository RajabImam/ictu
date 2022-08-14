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


<!--    
<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Register Your Desired Courses</h3>
  </div>
  <div class="panel-body">
  <h3>Register Courses</h3>
  <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">


<div class="form-group">
    <label class="control-label col-sm-4" for="fees">Fees Paid:</label>
    <div class="col-sm-6">
    <input type="text" class="form-control" id="fees">
</div>
</div>

<div class="form-group">
    <label class="control-label col-sm-4" for="bank">Upload Bank Teller:</label>
    <div class="col-sm-6">
    <input type="file" class="form-control" id="bank">
  </div>
  </div>

    <button  class="btn btn-info center-block" name="register" type="submit">Register Course</button>
  </form>
   
  

  </div>
  
</div>-->

 <div class="row">
                    <div class="col-lg-12">
                       
                    <div class="col-xs-6">
                     <h3>Register Courses</h3> 
                     <?php
                      stdCourseReg();

                     ?>
                    <div class="table-hover">
                    <!--<table class="table">
                            <th>Course Code</th>
                            <th>Course Name</th>
                            <th></th>-->
                        <form action="" method="post" enctype="multipart/form-data">
                        <?php
                         /* StudentCourses();

                          /*if (isset($_POST['course'])) {
                            # code...
                            print_r($_POST['course']);
                          }

                          if (isset($_POST['register'])) {
                            # code...
                            stdCourseRegister();
                          }*/
                        ?>
                    <!--</table>--> 

<div class="form-group">
  <label class="control-label col-sm-4" for="dept">Course 1:</label>
  <div class="col-sm-6">
  <select class="form-control" name="course1" id="course1">
      <?php
      $query = "SELECT * FROM course";
    $select_course = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($select_course))
    {
            $id = $row['id'];
            $courseTitle = $row['courseTitle'];

            echo "<option value='$courseTitle'>{$courseTitle}</option>";


    }


      ?>
  </select>
  </div>
</div>

<div class="form-group">
  <label class="control-label col-sm-4" for="dept">Course 2:</label>
  <div class="col-sm-6">
  <select class="form-control" name="course2" id="course2">
      <?php
      $query = "SELECT * FROM course";
    $select_course = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($select_course))
    {
            $id = $row['id'];
            $courseTitle = $row['courseTitle'];

            echo "<option value='$courseTitle'>{$courseTitle}</option>";


    }


      ?>
  </select>
  </div>
</div>

<div class="form-group">
  <label class="control-label col-sm-4" for="dept">Course 3:</label>
  <div class="col-sm-6">
  <select class="form-control" name="course3" id="course3">
      <?php
      $query = "SELECT * FROM course";
    $select_course = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($select_course))
    {
            $id = $row['id'];
            $courseTitle = $row['courseTitle'];

            echo "<option value='$courseTitle'>{$courseTitle}</option>";


    }


      ?>
  </select>
  </div>
</div>

<div class="form-group">
  <label class="control-label col-sm-4" for="dept">Course 4:</label>
  <div class="col-sm-6">
  <select class="form-control" name="course4" id="course4">
      <?php
      $query = "SELECT * FROM course";
    $select_course = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($select_course))
    {
            $id = $row['id'];
            $courseTitle = $row['courseTitle'];

            echo "<option value='$courseTitle'>{$courseTitle}</option>";


    }


      ?>
  </select>
  </div>
</div>

<div class="form-group">
  <label class="control-label col-sm-4" for="dept">Course 5:</label>
  <div class="col-sm-6">
  <select class="form-control" name="course5" id="course5">
      <?php
      $query = "SELECT * FROM course";
    $select_course = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($select_course))
    {
            $id = $row['id'];
            $courseTitle = $row['courseTitle'];

            echo "<option value='$courseTitle'>{$courseTitle}</option>";


    }


      ?>
  </select>
  </div>
</div>

<div class="form-group">
  <label class="control-label col-sm-4" for="dept">Course 6:</label>
  <div class="col-sm-6">
  <select class="form-control" name="course6" id="course6">
      <?php
      $query = "SELECT * FROM course";
    $select_course = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($select_course))
    {
            $id = $row['id'];
            $courseTitle = $row['courseTitle'];

            echo "<option value='$courseTitle'>{$courseTitle}</option>";


    }


      ?>
  </select>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-4" for="dept">Course 7:</label>
  <div class="col-sm-6">
  <select class="form-control" name="course7" id="course7">
      <?php
      $query = "SELECT * FROM course";
    $select_course = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($select_course))
    {
            $id = $row['id'];
            $courseTitle = $row['courseTitle'];

            echo "<option value='$courseTitle'>{$courseTitle}</option>";


    }


      ?>
  </select>
  </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-4" for="fees">Fees Paid:</label>
    <div class="col-sm-6">
    <input type="number" class="form-control" name="fees" id="fees" maxlength="7" required>
</div>
</div>

<div class="form-group">
    <label class="control-label col-sm-4" for="bank">Upload Bank Teller:</label>
    <div class="col-sm-6">
    <input type="file" class="form-control" name="bank" id="bank" required>
  </div>
  </div>
                        <div class="form-group">
                             <button  class="btn btn-primary center-block" name="register" type="submit">Register Course</button>
                        </div>

                       </form>
                           
                    </div>
                  
                    
                        

                    </div><!--End category form-->

                    <div class="col-xs-6">
                    <h3></h3>

                    <?php
                      findAllCourses();
                    ?>
   
                    <!--<h3>Registration Information</h3>-->
                    <!--<div class="table-hover">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Notice</th>
                            
                            
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        //findStdRegCourses();
                        ?>
                           <td><p class="danger">Your Registration is not yet approved/confirmed. If your fees is paid completely and your registration is still not confirmed,
                            please write via the contact us page, or meet the account department onsite for clarification.</p></td>
                        </tbody>
                    </table>
                    </div>
                    </div>-->

                        
                    </div>
                </div>

</div>
<?php include 'includes/footer.php'; ?>