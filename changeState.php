<!DOCTYPE HTML>


<div>
	
<link  href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- Latest compiled and minified CSS -->
<link  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link active" href="view.php">comments</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="Ratingview.php">rating</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="promote.php">promotion</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="changestate.php">activation</a>
  </li>
</ul>
</div>




<?php
  
    // Connect to database 
    $con = mysqli_connect("localhost","root","","grndresturant");
  
    // Get all the states from state table
    // execute the query 
    // Store the result
    $sql = "SELECT * FROM `username`";
    $Sql_query = mysqli_query($con,$sql);
    $iterate = mysqli_fetch_all($Sql_query,MYSQLI_ASSOC);
?>
  
<!DOCTYPE html>
<html>
<head>
	<header>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</header>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
           content="width=device-width, initial-scale=1.0">
     
    <!-- Using internal/embedded css -->
    <style>
        .btn{
            background-color: red;
            border: none;
            color: white;
            padding: 5px 5px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 20px;
        }
        .green{
            background-color: #199319;
        }
        .red{
            background-color: red;
        }
        table,th{
            border-style : solid;
            border-width : 1;
            text-align :center;
        }
        td{
            text-align :center;
        }
    </style>    
</head>
  
<body>
    <h2 align="center">State Table</h2> 
    <table align="center" class="table table-dark">
        <!-- TABLE TOP ROW HEADINGS-->
        <tr>
            <th>Name</th>
            <th>Status</th>
            <th>Toggle</th>
        </tr>
        <?php
  
            // Use foreach to access all the state data
            foreach ($iterate as $state) { ?>
            <tr>
                <td><?php echo $state['name']; ?></td>
                <td><?php 
                        // Usage of if-else statement to translate the 
                        // tinyint status value into some common terms
                        // 0-Inactive
                        // 1-Active
                        if($state['status']=="1") 
                            echo "Active";
                        else 
                            echo "Inactive";
                    ?>                          
                </td>
                <td>
                    <?php 
                    if($state['status']=="1") 
  
                        // if a state is active i.e. status is 1 
                        // the toggle button must be able to deactivate 
                        // we echo the hyperlink to the page "deactivate.php"
                        // in order to make it look like a button
                        // we use the appropriate css
                        // red-deactivate
                        // green- activate
                        echo 
							"<a href=deactivate.php?id=".$state['id']." class='btn red'>Deactivate</a>";
                    else 
                        echo 
							"<a href=activate.php?id=".$state['id']." class='btn green'>Activate</a>";
                    ?>
            </tr>
           <?php
                }
                // End the foreach loop 
           ?>
    </table>
</body>
  
</html>
