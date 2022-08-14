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

<div class="col-md-12">
    
<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Time Table</h3>
  </div>
  <div class="panel-body">

  <div class="table-responsive">
    <table class="table">
    
    <th></th>
    <th>08:00 - 11:00</th>
    <th>11:00 - 14:00</th>
    <th>14:00 - 17:00</th>
    <tr>
        <td><strong>Monday</strong></td>
        <?php
            $query = "SELECT * FROM timetable WHERE day = 'Monday' AND period = '08:00 - 11:00' ";
            $select_timeTable = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($select_timeTable))
            {
               
                $course  = $row['course'];
                echo "<td>{$course}</td>";
            }
            ?>

            <?php
            $query = "SELECT * FROM timetable WHERE day = 'Monday' AND period = '11:00 - 14:00' ";
            $select_timeTable = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($select_timeTable))
            {
               
                $course  = $row['course'];
                echo "<td>{$course}</td>";
            }
            ?>
            <?php
            $query = "SELECT * FROM timetable WHERE day = 'Monday' AND period = '14:00 - 17:00' ";
            $select_timeTable = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($select_timeTable))
            {
               
                $course  = $row['course'];
                echo "<td>{$course}</td>";
            }
            ?>
    </tr>
    <tr>
        <td><strong>Tuesday</strong></td>
        <?php
            $query = "SELECT * FROM timetable WHERE day = 'Tuesday' AND period = '08:00 - 11:00' ";
            $select_timeTable = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($select_timeTable))
            {
               
                $course  = $row['course'];
                echo "<td>{$course}</td>";
            }
            ?>
            
            <?php
            $query = "SELECT * FROM timetable WHERE day = 'Tuesday' AND period = '11:00 - 14:00' ";
            $select_timeTable = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($select_timeTable))
            {
               
                $course  = $row['course'];
                echo "<td>{$course}</td>";
            }
            ?>
            <?php
            $query = "SELECT * FROM timetable WHERE day = 'Tuesday' AND period = '14:00 - 17:00' ";
            $select_timeTable = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($select_timeTable))
            {
               
                $course  = $row['course'];
                echo "<td>{$course}</td>";
            }
            ?>
    </tr>
    <tr>
        <td><strong>Wednesday</strong></td>
        <?php
            $query = "SELECT * FROM timetable WHERE day = 'Wednesday' AND period = '08:00 - 11:00' ";
            $select_timeTable = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($select_timeTable))
            {
               
                $course  = $row['course'];
                echo "<td>{$course}</td>";
            }
            ?>
            
            <?php
            $query = "SELECT * FROM timetable WHERE day = 'Wednesday' AND period = '11:00 - 14:00' ";
            $select_timeTable = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($select_timeTable))
            {
               
                $course  = $row['course'];
                echo "<td>{$course}</td>";
            }
            ?>
            <?php
            $query = "SELECT * FROM timetable WHERE day = 'Wednesday' AND period = '14:00 - 17:00' ";
            $select_timeTable = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($select_timeTable))
            {
               
                $course  = $row['course'];
                echo "<td>{$course}</td>";
            }
            ?>
    </tr>
    <tr>
        <td><strong>Thursday</strong></td>
        <?php
            $query = "SELECT * FROM timetable WHERE day = 'Thursday' AND period = '08:00 - 11:00' ";
            $select_timeTable = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($select_timeTable))
            {
               
                $course  = $row['course'];
                echo "<td>{$course}</td>";
            }
            ?>
            
            <?php
            $query = "SELECT * FROM timetable WHERE day = 'Thursday' AND period = '11:00 - 14:00' ";
            $select_timeTable = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($select_timeTable))
            {
               
                $course  = $row['course'];
                echo "<td>{$course}</td>";
            }
            ?>
            <?php
            $query = "SELECT * FROM timetable WHERE day = 'Thursday' AND period = '14:00 - 17:00' ";
            $select_timeTable = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($select_timeTable))
            {
               
                $course  = $row['course'];
                echo "<td>{$course}</td>";
            }
            ?>
    </tr>
    <tr>
        <td><strong>Friday</strong></td>
        <?php
            $query = "SELECT * FROM timetable WHERE day = 'Friday' AND period = '08:00 - 11:00' ";
            $select_timeTable = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($select_timeTable))
            {
               
                $course  = $row['course'];
                echo "<td>{$course}</td>";
            }
            ?>
            
            <?php
            $query = "SELECT * FROM timetable WHERE day = 'Friday' AND period = '11:00 - 14:00' ";
            $select_timeTable = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($select_timeTable))
            {
               
                $course  = $row['course'];
                echo "<td>{$course}</td>";
            }
            ?>
            <?php
            $query = "SELECT * FROM timetable WHERE day = 'Friday' AND period = '14:00 - 17:00' ";
            $select_timeTable = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($select_timeTable))
            {
               
                $course  = $row['course'];
                echo "<td>{$course}</td>";
            }
            ?>
    </tr>
    
    
    
    </table>
    </div>
  <?php
   /*$query = "SELECT * FROM timetable";
    $select_timeTable = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($select_timeTable))
    {
    $id       = $row['id'];
    $day     = $row['day'];
    $period    = $row['period'];
    $course  = $row['course'];
    $instructor  = $row['lecturer'];
    //echo "<tr>";
    //echo "<td>{$id}</td>";
    //echo "<td>{$day}</td>";
    //echo "<td>{$startTime}</td>";
    //echo "<td>{$endTime}</td>";
    //echo "<td>{$course}</td>";
    //echo "<td>{$instructor}</td>";
    //echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to Delete'); \" href='contact.php?delete={$id}'>Delete</a></td>";
    //echo "<td><a href='mailto:$email'>Reply</a></td>";
    //echo "</tr>";
    
    //echo "{$period}";
  
    echo "<div class='table-responsive'>";
  echo "<table class='table'>";
  //echo "  <th></th>";
  //echo "  <th></th>";
  //echo "  <th></th>";
  //echo "  <th>Outline</th>";
  echo "     <tr>
    <td><strong>{$day}</strong></td>
    <td><strong>{$period}</strong></td>
    <td>{$course}</td>
    </tr>
</table> 
</div> ";
    

    }*/
?>
    

  
<!--<div class="table-responsive">
  <table class="table">
    <th>8.00-11.00</th>
    <th>11.00-14.00</th>
    <th>14.00-17.00</th>
    <tr>
    	<td class="info">Monday</td>
    	<tr>
    	<td>Directory Service</td>
    	<td>Intermediate AIS</td>
    	<td>Advanced Accounting</td>
    	</tr>
    	<tr>
    	<td>Information System</td>
    	<td>Discrete Mathematics</td>
    	<td>Fraud and Ethics</td>
    	</tr>
    	<tr>
    	<td>Emerging Web tech</td>
    	<td>Financial Accounting 2</td>
    	<td>Intro to E-Commerce</td>
    	</tr>
    </tr>
     <tr>
    	<td class="info">Tuesday</td>
    	<tr>
    	<td>Statistical Methods</td>
    	<td>Software Measurement</td>
    	<td>Financial Institution</td>
    	</tr>
    	<tr>
    	<td>Software Engineering</td>
    	<td>Software Testing</td>
    	<td>Principles of Macro Economics</td>
    	</tr>
    	<tr>
    	<td>Object Oriented Analysis and Design</td>
    	<td>IT Policy and Strategy</td>
    	<td>Communication Skills</td>
    	</tr>
    </tr>
     <tr>
    	<td class="info">Wednesday</td>
    	<tr>
    	<td>Directory Service</td>
    	<td>Intermediate AIS</td>
    	<td>Advanced Accounting</td>
    	</tr>
    	<tr>
    	<td>Information System</td>
    	<td>Discrete Mathematics</td>
    	<td>Fraud and Ethics</td>
    	</tr>
    	<tr>
    	<td>Emerging Web tech</td>
    	<td>Financial Accounting 2</td>
    	<td>Intro to E-Commerce</td>
    	</tr>
    </tr>
     <tr>
    	<td class="info">Thursday</td>
    	<tr>
    	<td>Directory Service</td>
    	<td>Intermediate AIS</td>
    	<td>Advanced Accounting</td>
    	</tr>
    	<tr>
    	<td>Information System</td>
    	<td>Discrete Mathematics</td>
    	<td>Fraud and Ethics</td>
    	</tr>
    	<tr>
    	<td>Emerging Web tech</td>
    	<td>Financial Accounting 2</td>
    	<td>Intro to E-Commerce</td>
    	</tr>
    </tr>
     <tr>
    	<td class="info">Friday</td>
    	<tr>
    	<td>Directory Service</td>
    	<td>Intermediate AIS</td>
    	<td>Advanced Accounting</td>
    	</tr>
    	<tr>
    	<td>Information System</td>
    	<td>Discrete Mathematics</td>
    	<td>Fraud and Ethics</td>
    	</tr>
    	<tr>
    	<td>Emerging Web tech</td>
    	<td>Financial Accounting 2</td>
    	<td>Intro to E-Commerce</td>
    	</tr>
    </tr>
  </table>
</div>-->
<center>To get the pdf version of the Timetable <a href="timetable.pdf"><br/> Download </a></center>
  </div>
  
</div>





</div>

</div>


        

</div>
<?php include 'includes/footer.php'; ?>