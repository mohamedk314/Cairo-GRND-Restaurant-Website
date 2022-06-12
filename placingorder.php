

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>

button[type=button], button[type=submit]
{
  background-color: rgba(0,0,0,0.7);
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
 border-radius: 20px;
 cursor: pointer;
 font-size: 16px;
 font-weight: 400;
}

.button:hover {
  color: skyblue;
}

.centered {
  position: fixed;
  top: 62%;
  left: 50%;
  margin-top: -50px;
  margin-left: -100px;
}

.centered1 {
  position: fixed;
  top: 70%;
  left: 52%;
  margin-top: -50px;
  margin-left: -100px;
}

</style>


<center>

<h1>
Time left in wich you can modify the order
<span id="m"></span>
<span>:</span>
<span id="s"></span>
</h1>
<br>

</center>

<script>

var s=59;
var m=4;

var time= setInterval(function() {timer()}, 1000);
function timer(){

s--;
if(s==-1){

m--;
s=59;
if(m==-1){

m=0;
s=0;
clearInterval(time);
location.href = 'ordertest.php';

}

}

document.getElementById("m").innerHTML = m;
document.getElementById("s").innerHTML = s;

}

</script>

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
						<th width="20%">Total</th>
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
					</tr>
					<?php
							$total_compose = $total_compose + ($values["item_quantity"] * $values["item_price"]);
                            $_SESSION['total_price_compose'] = $total_compose;

						}

					?>

                    <?php
							
						}

                        $total_receipt = $_SESSION['total_price_compose'] + $_SESSION['total_price_drinks'] + $_SESSION['total_price_lunch'] + $_SESSION['total_price_breakfast'] + $_SESSION['total_price_dinner'];
                            $_SESSION['total_price_receipt'] = $total_receipt;

					?>

<?php /*--------------------------------------------------          total                  --------------------------------------------------------------*/ ?>
					
					<tr>
						<td colspan="3" align:right>Total</td>
						<td align:right>$ <?php echo number_format($total_receipt, 2); ?></td>
						<td></td>
					</tr>

<center>

<div>

  <button class="button" type="submit" onclick="window.location.href='ordertest.php'">skip timer</button>
  <button class="button" type="submit" onclick="window.location.href='hpu.php'">change order</button>
  <button type="button" class="button" onclick="window.location.href='receipt.php'">Cancel order!</button>
  
  <h3>note: of you skipped the timer you can not take it back !</h3>

  </div>

  </center>
