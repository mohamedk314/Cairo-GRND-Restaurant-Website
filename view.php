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