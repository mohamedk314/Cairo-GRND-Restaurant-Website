<?php
  
          // Connect to database 
      $con=mysqli_connect("localhost","root","","grndresturant");
  
    // Check if id is set or not if true toggle,
    // else simply go back to the page
            if (isset($_GET['id'])){
  
                  // Store the value from get to a 
                // local variable "course_id"
            $course_id=$_GET['id'];
  
        // SQL query that sets the status
            //to 1 to indicate activation.
          $sql="UPDATE `userState` SET 
               `status`=1 WHERE id='$course_id'";
      
          // Execute the query
          mysqli_query($con,$sql);
          }
          
          // Go back to course-page.php
        header('location: changeState.php');
      ?>
