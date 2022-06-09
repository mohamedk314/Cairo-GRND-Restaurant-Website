<header>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</header>


<ul class="list-group">
<?php
  
    $con = mysqli_connect("localhost","root","","grndresturant");
  
    $sql = "SELECT * FROM `orded_status` WHERE status = '0' ORDER BY order_id ASC";
    $result = mysqli_query($con,$sql);


    
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        {

            $data1[]=$row;


foreach($result as $data)

  if (!empty($data)){

  $id = $data["id"];
  $status = $data["status"];
  $order_id = $data["order_id"];


            //echo $order_id ."<br>";
            $query = "SELECT * FROM `order_details` WHERE order_id = '$order_id'";
            $result2 = mysqli_query($con, $query);
            $order = mysqli_fetch_all($result2,MYSQLI_ASSOC);
            $arrlength = count($order);
            /*print_r($order);
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
              }*/
              ?>
<ul class="list-group">
  <li class="list-group-item"><?php echo $order_id ?></li>
</ul>
              <?php

            $order_id = NULL;

            //echo "********************"."<br>";
        }
    }


    }
?>
</ul>