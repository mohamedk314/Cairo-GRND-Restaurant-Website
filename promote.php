
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

<style>
table, th, td {
  border: 1px solid black;
}

</style>
<?php

session_start();

$conn = new mysqli('localhost','root','','grndresturant');


$query = "SELECT * FROM user WHERE role='cashier'";
$result = mysqli_query($conn,$query);
if(isset($_POST['save']))
{
    $Promotedid=$_POST['check'];
    $Promoted_id=implode(',',$promote_id);
    $QualityRole="qualitycontrol";
    //	$sql="UPDATE user set role='quality control' WHERE role='cashier'";
	$sql="UPDATE user set role='$QualityRole' WHERE id='".$Promotedid."'";
	
    mysqli_query($conn,$sql);
}

?>
<html>
	<header>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</header
<form method="post" action="">
<table align="center" class="table table-dark">
<thead>
<tr>

    <th>First Name</th>

    <th> Gender</th>
    <th>Email</th>
    <th>PhoneNumber</th>
    <th>Role</th>
    <th>Promote</th>

</tr>
</thead>
<?php
 
while($row = mysqli_fetch_array($result)) 
{

?>
<tr>

<td><?= $row['firstname']; ?></td>

    <td><?= $row['gender']; ?></td>
    <td><?=  $row['email']; ?></td>
    <td><?= $row['phonenumber']; ?></td>
    <td><?= $row['role']; ?></td>
    <td><input type="checkbox" id="checkItem" name="check" value="<?php echo $row["id"]; ?>"></td>

</tr>
<?php
 
}
?>
</table>
<p><button type="submit" class="btn btn-success" name="save">Promote</button></p>
</form>

</body>
</html>
</html>
