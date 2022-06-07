<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "grndresturant");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["lunch_cart"]))
	{
		$item_array_id = array_column($_SESSION["lunch_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["lunch_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["lunch_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["lunch_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["lunch_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["lunch_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="menulunch.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>

    <style>

    .Container1{
        position: fixed;
 margin: 5%;
 padding: 1%;
 width: 40%;
 background-color: white;
 border-radius: 20px;
 box-shadow: 0px 25px 40px #1687d933;
}

.Header{
 width: 90%;
 height: 15%;
 display: flex;
 justify-content: space-between;
 align-items: center;
}

.Heading{
 font-size: 20px;
 font-family: ‘Open Sans’;
 font-weight: 700;
 color: #2F3841;
}

.centered {
  position: fixed;
  top: 62%;
  left: 50%;
  margin-top: -50px;
  margin-left: -100px;
}
</style>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
    <h6 style="color: black;
  font-size: 60px;
  position: fixed;
  left: 40%;">Order lunch !</h6><br /> 
	<body>
		<br />
        
		<div class="container">
			<br />
			<br />
			<br />
			<br /><br />
			<?php
				$query = "SELECT * FROM menulunch ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="menulunch.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align:center>
						<img src="images/lunch/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to cart" />

                        
					</div>
                    
				</form>
			</div>
           
			<?php
					}
				}
                else{  /*  if there is nothing in the database  */
                    ?>
                            <div class= "Container1" >
            
                            <div class=”Header” >
                           <h3 style = "font-size: 20px;
             font-family: ‘Open Sans’;
             font-weight: 700;
             color: #2F3841;">Sorry but there is no data to show you can wait for the admin to add more content</h3>
                            </div>
            
                            <img  src="images/errors/errorlunch.jpg" class="img-responsive" /><br />
							<button style="margin-top:5px;" type="button" class="btn btn-secondary" onclick="window.location.href='hpu.php'" >continue browsing</button>
                            </div>
                            <?php
                            die("  ");
                            }
                            ?>
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["lunch_cart"]))
					{
						$total = 0;
						foreach($_SESSION["lunch_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="menulunch.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
                            $_SESSION['total_price_lunch'] = $total;
						}
					?>
					<tr>
						<td colspan="3" align:right>Total</td>
						<td align:right>$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
			<button style="margin-top:5px;" type="button" class="btn btn-secondary" onclick="window.location.href='hpu.php'" >continue browsing</button>
			<button style="margin-top:5px;" class="btn btn-success" type="button" onclick="window.location.href='receipt.php'">checkout !</button>
		</div>
		
	</div>
	<br />
	
	</body>
</html>