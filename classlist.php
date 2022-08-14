<?php include "includes/connection.php"; ?>
<?php ob_start(); ?>
<?php session_start(); ?>
<?php

if(!isset($_SESSION['ictemail'])) {
 
     header("Location: index.php");

}
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>
<div class="container">
<h5 class="text-primary">Welcome: <?php echo $_SESSION['name']; ?> <a class="pull-right btn btn-primary" href="includes/logout.php"> Logout </a></h5>
           <hr>
<div class="row">

<div class="col-md-8">
    
<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Class Lists</h3>
  </div>
  <div class="panel-body">

   <!--<div class="table-responsive">
  <table class="table">
  <tr>
  <p>Software Engineering - Mr. Daniel Moune</p>
  </tr>
  
    <th>S/N</th>
    <th>Mat. No</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone No</th>
    <tr>
    	<td>1</td>
    	<td>ICTU1040372</td>
    	<td>Rajab Imam</td>
    	<td>rajabimam@yahoo.com</td>
    	<td>677108556</td>
    </tr>
    <tr>
    	<td>2</td>
    	<td>ICTU1040490</td>
    	<td>Tamunang Courage</td>
    	<td>tamunang.courage@ictuniversity.org</td>
    	<td>672153402</td>
    </tr>
    <tr>
    	<td>3</td>
    	<td>ICTU103425</td>
    	<td>Tebid Brenda</td>
    	<td>tebid.quinoy@ictuniversity.org</td>
    	<td>67782629</td>
    </tr>
    <tr>
    	<td>4</td>
    	<td>ICTU10389</td>
    	<td>Jerry</td>
    	<td>tebid.quinoy@ictuniversity.org</td>
    	<td>67782629</td>
    </tr>
    <tr>
    	<td>5</td>
    	<td>ICTU10321</td>
    	<td>Christian</td>
    	<td>tebid.quinoy@ictuniversity.org</td>
    	<td>67782629</td>
    </tr>
  </table>
</div>-->

<?php
  
  $query = "SELECT * FROM course WHERE status = 'Running' ORDER BY courseTitle ASC ";
    $select_course = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($select_course))
    {
    $courseCode = $row['courseCode'];
    $courseTitle = $row['courseTitle'];
    $status = $row['status'];

    
    echo "

  <div class='panel-group' id='accordion' role='tablist' aria-multiselectable='true'>
  <div class='panel panel-primary'>
    <div class='panel-heading' role='tab' id='headingOne'>
      <h4 class='panel-title'>
        <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseOne' style='text-decoration:none;' aria-expanded='true' aria-controls='collapseOne'>
         {$courseCode} | {$courseTitle} 
        </a>
      </h4>
    </div>
    <div id='collapseOne' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='headingOne'>
      <div class='panel-body'>";

    $query2 = "SELECT * FROM registeredcourse WHERE $courseTitle IN(course1, course2, course3, course4, course5, course6, course7)";
    
    $regCourse = mysqli_query($connection,$query2);
    while ($row1 = mysqli_fetch_assoc($regCourse))
    {
      $matno = $row1['matricno'];

    

    $query3 = "SELECT * FROM student WHERE matricno = '".$matno."' ";
    $std = mysqli_query($connection,$query3);
    while ($row2 = mysqli_fetch_assoc($std))
    {
      $matno = $row2['matricno'];
      $name = $row2['fullname'];
      $email = $row2['ictemail'];
      $phone = $row2['phonenumber'];
}
  
 }  

  echo "<div class='table-responsive'>";
  echo "<table class='table'>";
  echo "  <th>Matricule</th>";
  echo "  <th>Name</th>";
  echo "  <th>Email</th>";
  echo "  <th>Phone</th>";
  echo "     <tr>
    <td>{$matno}</td>
    <td>{$name}</td>
    <td>{$email}</td>
    <td>{$phone}</td>
    </tr>

   
</table> 
</div> 
      </div>
    </div>
  </div>" ;



      
}




?>
   

  </div>
  
</div>





</div>
<?php include "includes/sidebar.php"; ?>

</div>


        

</div>
<?php include 'includes/footer.php'; ?>