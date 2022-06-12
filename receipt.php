<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	    </head>
        <?php
        session_start();
        ?>

<?php /*--------------------------------------------------          container                  --------------------------------------------------------------*/ ?>
<div class="container">
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
<?php /*--------------------------------------------------          drinks                  --------------------------------------------------------------*/ ?>
					<?php
                    $total_drinks = 0;
					if(!empty($_SESSION["drinks_cart"]))
					{
                        ?>
                        <tr>
						<th width="70%" style = "color : red  ;  font-size: 20px;;">Drinks order</th>
					</tr>
                    <?php
						$total_drinks = 0;
						foreach($_SESSION["drinks_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="menudrinks.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total_drinks = $total_drinks + ($values["item_quantity"] * $values["item_price"]);
                            
						}
                        
					}
                    $_SESSION['total_price_drinks'] = $total_drinks;
					?>
<?php /*--------------------------------------------------          dinner                  --------------------------------------------------------------*/ ?>
					<?php
                    $total_dinner = 0;
					if(!empty($_SESSION["dinner_cart"]))
					{
                        ?>
                        <tr>
						<th width="70%" style = "color : red  ;  font-size: 20px;;">dinner order</th>
					</tr>
                    <?php
						$total_dinner = 0;
						foreach($_SESSION["dinner_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="menudinner.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total_dinner = $total_dinner + ($values["item_quantity"] * $values["item_price"]);
                            
						}
                        
					}
                    $_SESSION['total_price_dinner'] = $total_dinner;
					?>
<?php /*--------------------------------------------------          breakfast                  --------------------------------------------------------------*/ ?>
					<?php
                    $total_breakfast = 0;
					if(!empty($_SESSION["breakfast_cart"]))
					{
                        ?>
                        <tr>
						<th width="70%" style = "color : red  ;  font-size: 20px;;">breakfast order</th>
					</tr>
                    <?php
						$total_breakfast = 0;
						foreach($_SESSION["breakfast_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="menubreakfast.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total_breakfast = $total_breakfast + ($values["item_quantity"] * $values["item_price"]);
                            
						}
                        
					}
                    $_SESSION['total_price_breakfast'] = $total_breakfast;
                    ?>
<?php /*--------------------------------------------------          lunch                  --------------------------------------------------------------*/ ?>

<?php 
                    $total_lunch = 0;
					if(!empty($_SESSION["lunch_cart"]))
					{
                        ?>
                        <tr>
						<th width="70%" style = "color : red  ;  font-size: 20px;;">lunch order</th>
					</tr>
                    <?php
						$total_drinks = 0;
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
							$total_lunch = $total_lunch + ($values["item_quantity"] * $values["item_price"]);
                            
						}
                        
					}
                    $_SESSION['total_price_lunch'] = $total_lunch;
					?>
<?php /*--------------------------------------------------          compose                  --------------------------------------------------------------*/ ?>
					
					<?php
                    $total_compose = 0;
                    
					if(!empty($_SESSION["sandwitch"]))
					{
                        ?>
                        <tr>
						<th width="70%" style = "color : red  ;  font-size: 20px;;">composed sandwitch</th>
					</tr>
                    <?php
						$total_compose = 0;
						foreach($_SESSION["sandwitch"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="compose.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total_compose = $total_compose + ($values["item_quantity"] * $values["item_price"]);
                            
						}
					?>

                    <?php
							
						}
						$_SESSION['total_price_compose'] = $total_compose;
						
						$total_receipt = $_SESSION['total_price_compose'] + $_SESSION['total_price_drinks'] + $_SESSION['total_price_lunch'] + $_SESSION['total_price_breakfast'] + $_SESSION['total_price_dinner'];
						$_SESSION['total_price_receipt'] = $total_receipt;
					?>
<?php /*--------------------------------------------------          total                  --------------------------------------------------------------*/ ?>
					
					<tr>
						<td colspan="3" align:right>Total</td>
						<td align:right>$ <?php echo number_format($total_receipt, 2); ?></td>
						<td></td>
					</tr>
						
				</table>
				<button style="margin-top:5px;" type="button" class="btn btn-success" onclick="window.location.href='placingorder.php'" >place order</button>
				<button style="margin-top:5px;" type="button" class="btn btn-danger" onclick="window.location.href='cancelorder.php'" >cancel order</button>
			</div>
</div>
