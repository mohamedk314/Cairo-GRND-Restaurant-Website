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



<html>

<link rel="stylesheet" type="text/css" href="style.css">
<?php
include 'config.php';
?>
<div class="wrapper">
<div class="prev-comments">
			<?php 
			
			$sql = "SELECT * FROM comments";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div class="single-item">
				<h4><?php echo $row['name']; ?></h4>
				<a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
				<p><?php echo $row['comment']; ?></p><hr>
			</div>
			<?php

				}
			}
			
			?>	
		</div>
	</div>
		</html>
