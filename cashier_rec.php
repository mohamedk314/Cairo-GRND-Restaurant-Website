<header>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</header>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Cashier</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="cashier.php">receipts <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cashier_rec.php">receipt <span class="sr-only">(current)</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="cashier.php" method="post">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <submit class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</submit>
    </form>
  </div>
</nav>

<script language="javascript"> 

 function deleteitem($delid)
 {

 if(confirm("You're about to delete this Item.")){ 
 return true;
 }
 alert("fuck");

 } 
 </script>

<style>

.button:hover 
{
  color: skyblue;
}


</style>








<?php
 /* 
    $con = mysqli_connect("localhost","root","","grndresturant");
  $order_id = $_GET['order_id'];

            $query = "SELECT * FROM `order_details` WHERE order_id = '$order_id'";
            $result2 = mysqli_query($con, $query);
            $order = mysqli_fetch_all($result2,MYSQLI_ASSOC);
            $arrlength = count($order);

            //print_r($order);

            echo "<br>";

            for($x = 0; $x < $arrlength; $x++) {
                print_r($order[$x]["order_id"]);
                echo "<br>";
                print_r($order[$x]["type"]);
                echo "<br>";
                print_r($order[$x]["price"]);
                echo "<br>";
                print_r($order[$x]["name"]);
                echo "<br>";
              }
              ?>
              <?php

            $order_id = NULL;

            //echo "********************************************************"."<br>";

*/
?>



<div class = "constainer" >

<table  class="table table-hover">

<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">type of item</th>
      <th scope="col">price</th>
      <th scope="col">item</th>
      <th scope="col">Action</th>
    </tr>
  </thead>


<?php

$con = mysqli_connect("localhost","root","","grndresturant");

if( isset($_GET["action"]) == "delete" )
{
        
        $name_to_delete = $_GET['deleteme'];
        $order_id = $_GET['order_id'];
        $total = $_GET['total'];


         $sql = "DELETE FROM order_details WHERE order_id = '$order_id' AND name = '$name_to_delete'";
        
         if ($con ->query($sql) === TRUE) {
            // echo "New record created succsesfullly";
         }

         else{
             //echo "Error" . $query . "<br>" . $conn->error;
         }
         $sql = NULL ;


         header ("cashier_rec.php? action=cashout & order_id=$order_id &total$total ");
        }
    



//total_cash
$total = $_GET['total'];
  $order_id = $_GET['order_id'];
  

  $sql = "SELECT * FROM `order_details` WHERE order_id = '$order_id'";
  $result = mysqli_query($con,$sql);


  
  if(mysqli_num_rows($result) > 0)
  {
      while($row = mysqli_fetch_array($result))
      {

          $data1[]=$row;

          $x = 1;
foreach($result as $data){

if (!empty($data)){

$type = $data["type"];
$price = $data["price"];
$name = $data["name"];


          //echo $order_id ."<br>";
          $query = "SELECT * FROM `order_details` WHERE order_id = '$order_id'";
          $result2 = mysqli_query($con, $query);
          $order = mysqli_fetch_all($result2,MYSQLI_ASSOC);
          $arrlength = count($order);
          
            ?>
<tbody>
<tr>
<th scope="row"><?php echo $x ; $x++;?></th>
    <td><?php echo $type ?></td>
    <td><?php echo "$" .$price ?></td>
    <td><?php echo $name ?></td>
    
    <td><a href="cashier_rec.php?action=delete & order_id=<?php echo $data["order_id"]; ?>&total=<?php echo $total;?> &deleteme=<?php echo $name;?>"><span class="text-danger">Remove</span></a></td> <?php //Action ?>
</tr>

            <?php
          $order_id = NULL;

          //echo "********************************************************"."<br>";
      }
  }
  }
?>

  <center>

    <button style = "
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
 font-weight: 400;"type="button" class="button" onclick="window.location.href='receipt.php'">Cashout !</button>
    
    </center>

    <?php
  }
  else {

      ?>

      <th scope ="row"> There is no orders for now </th>
      <?php
  }
?>
</table >
</tbody>